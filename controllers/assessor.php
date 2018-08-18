<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Assessor extends Controller {

    static $error = 0;

    function __construct() {
        parent::__construct();
        Session::init();
        if (Session::get('loggedIn') == false) {
            Session::destroy();
            header('location:' . URL . 'login');
        }
        $this->view->map = 0;
    }

    function assessorRegistration() {
        $this->view->occupations = $this->model->findAllOccupation();
        $this->view->error = self::$error;
        $this->view->render1('assessor/assessorRegistration', 'header', 'footer');
        //$this->view->render1('assessment/assessmentRegistration', 'header', 'footer');
    }

    function persistAssessor() {
        if (isset($_POST['submit'])) {
            $target_dir = "public/assessor/docs/";
            $target_file = $_FILES["imageUpload"]["name"];
            $imageExtension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            //$image = chunk_split(base64_encode(file_get_contents($_FILES['imageUpload']['tmp_name'])));
            //$image = addslashes(file_get_contents($_FILES['imageUpload']["tmp_name"]));
            $data = array('occupation' => filter_input(INPUT_POST, 'occupation'),
                'firstName' => filter_input(INPUT_POST, 'myName'),
                'middleName' => filter_input(INPUT_POST, 'myMiddleName'),
                'lastName' => filter_input(INPUT_POST, 'lastname'),
                'lavels' => filter_input(INPUT_POST, 'level'),
                'organization' => filter_input(INPUT_POST, 'organization'),
                'image' => $image,
                'dob' => filter_input(INPUT_POST, 'dob'),
                'gender' => filter_input(INPUT_POST, 'gender'),
                'address' => filter_input(INPUT_POST, 'address'),
                'email' => filter_input(INPUT_POST, 'myEmail'),
                'phone' => filter_input(INPUT_POST, 'phone'),
                'phoneAlt' => filter_input(INPUT_POST, 'phoneAlt'),
                'assessorType' => filter_input(INPUT_POST, 'assessorType'),
                'accreditationDate' => filter_input(INPUT_POST, 'accreditationDate'),
                'regDate' => date('Y-m-d H:i:s'),
                'modDate' => ''
            );
            $result = $this->model->findByEmail(filter_input(INPUT_POST, 'myEmail'), null);
            if (count($result) > 0) {
                header('location:' . URL . 'assessor/assessorRegistration?response=2');
            } else {
                $lastId = $this->model->persistAssessor($data);
                if (is_numeric($lastId)) {
                    $fileName = $target_dir . $lastId . '.' . $imageExtension;
                    if (file_exists($fileName)) {
                        unlink($fileName);
                    }
                    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $fileName)) {
                        $dataUpdate = array('assessor_id' => $lastId,
                            'image' => $fileName);
                        $this->model->updateAssessor($dataUpdate);
                        header('location:' . URL . 'assessor/assessorRegistration?response=1');
                    }
                } else
                    header('location:' . URL . 'assessor/assessorRegistration?response=2');
            }
        }
    }

    function check_availability() {
        if (isset($_POST['username'][0]) && isset($_POST['username'][1])) {
            $email = $_POST['username'][0];
            $tableName = $_POST['username'][1];
            $result = $this->model->findByEmail($email, $tableName);
            if (count($result) > 0)
                echo 'OK';
            else
                echo 'NO';
        }
    }

    function checkAvailabilityWithId() {
        if (isset($_POST['username'][0]) && isset($_POST['username'][1]) && isset($_POST['username'][2])) {
            $email = $_POST['username'][0];
            $tableName = $_POST['username'][1];
            $id = $_POST['username'][2];
            $result = $this->model->findByEmailId($email, $tableName, $id);
        }
    }

    //List Assessor profile 
    function assessorList() {
        $this->view->assessors = $this->model->findAllAssessor();

        $this->view->render1('assessor/assessorList', 'header', 'footer');
    }

    function editAssessor() {
        if (isset($_GET['assessrId'])) {
            $result = $this->model->findAssessorById($_GET['assessrId']);
//           echo '<pre>';
//           print_r($result);die();
//           $image = $result[0]['image'];
//           header("Content-type: image/jpg");
//           echo base64_decode($image);die();
            $this->view->occupations = $this->model->findAllOccupation();
            $this->view->assessors = $result;
            $this->view->render1('assessor/editAssessor', 'header', 'footer');
        } else {
            header('location:' . URL . 'assessor/assessorList');
        }
    }

    /**
     * 
     * @param type $assessorId
     * @param type $imageName
     */
    function updateAssessor($assessorId = null, $imageName = null) {
        if ($assessorId != null) {
            $target_dir = "public/docs/assessor/";

            //$image = chunk_split(base64_encode(file_get_contents($_FILES['imageUpload']['tmp_name'])));
            //$image = addslashes(file_get_contents($_FILES['imageUpload']["tmp_name"]));
            $data = array('occupation' => filter_input(INPUT_POST, 'occupation'),
                'firstName' => filter_input(INPUT_POST, 'myName'),
                'middleName' => filter_input(INPUT_POST, 'myMiddleName'),
                'lastName' => filter_input(INPUT_POST, 'lastname'),
                'lavels' => filter_input(INPUT_POST, 'level'),
                'organization' => filter_input(INPUT_POST, 'organization'),
                'assessor_id' => $assessorId,
                'dob' => filter_input(INPUT_POST, 'dob'),
                'gender' => filter_input(INPUT_POST, 'gender'),
                'address' => filter_input(INPUT_POST, 'address'),
                'email' => filter_input(INPUT_POST, 'myEmail'),
                'phone' => filter_input(INPUT_POST, 'phone'),
                'phoneAlt' => filter_input(INPUT_POST, 'phoneAlt'),
                'assessorType' => filter_input(INPUT_POST, 'assessorType'),
                'accreditationDate' => filter_input(INPUT_POST, 'accreditationDate'),
                'modDate' => date("Y-m-d")
            );

            if ($_FILES["imageUpload"]["name"] != null) {
                $target_file = $_FILES["imageUpload"]["name"];
                $imageExtension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $fileName = $target_dir . $assessorId . '.' . $imageExtension;
                $data['image'] = $fileName;
                //check if the file is exist , and if exist delete the file first
                if ($imageName != null && file_exists($target_dir . $imageName)) {
                    unlink($target_dir . $imageName);
                }
                if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $fileName)) {
                    
                }
            } else {
                $data['image'] = $target_dir . $imageName;
            }
            $this->model->updateAssessor($data);
            header('location:' . URL . 'assessor/editAssessor?response=1');
        } else
            header('location:' . URL . 'assessor/editAssessor?response=2');
    }

    function selectImage() {
        if (isset($_GET['Id'])) {
            $result = $this->model->findAssessorById($_GET['Id']);

            $image = $result[0]['image'];
            header("Content-type: image/jpg");
            echo base64_decode($image);
        }
    }

    /**
     * 
     * @return type
     */
    function findAllOccupation() {

        return $this->model->findAllOccupation();
    }

}
