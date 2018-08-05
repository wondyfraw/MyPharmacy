<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<footer class="footer"> <!-- START: Footer -->
    &copy; 2016 <b>Big Ben</b> Admin
</footer>   <!-- END: Footer -->

</div>  <!-- END: wrapper -->

<script type="text/javascript" src="<?php echo URL; ?>public/js/lib/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/lib/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/lib/plugins.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>public/assets/plugins/lightGallery/js/lightgallery-all.min.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>public/assets/plugins/jvectormap/jquery-jvectormap-2.0.4.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/plugins/jvectormap/gdp-data.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/plugins/morris/raphael-min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/plugins/morris/morris.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/plugins/fullcalendar/fullcalendar.min.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>public/assets/datatable/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/datatable/dataTables.bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>public/assets/js/app.base.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/js/page-table.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>public/assets/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>public/assets/plugins/date-picker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/plugins/dateTime-picker/js/bootstrap-datetimepicker.min.js"></script> 
<script type="text/javascript" src="<?php echo URL; ?>public/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>public/css/validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/css/validation/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/assets/animate-it/animate-it.js"></script>
<!--  <script type="text/javascript" src="<?php echo URL; ?>public/assets/animate-it/arrow-line.js"></script>-->
<script src="<?php echo URL; ?>public/assets/formvalidation/form-validation.js"></script>
<?php if ($this->map == 1) { ?>
    <script type="text/javascript" src="<?php echo URL; ?>public/assets/js/page-dashboardv2.js"></script>
<?php } ?>

<style>
    .table > thead > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tfoot > tr > td {
        border-bottom: 1px solid #e2e2e4;

        color: #fff !important;
        border-top: none;
    }
    fieldset {
        border: solid 1px #DDD !important;
        padding: 0 10px 10px 10px;
        border-bottom: none;
    }

    legend {
        width: auto !important;
        border: none;
        font-size: 14px;
    }         
    #imageButton {
        font-size: 14px;
        color: #212c43;
        text-shadow: 0 1px 0 rgba(255,255,255,.3);
        -webkit-box-shadow: inset 0 1px 1px rgba(255,255,255,.5); 
        -moz-box-shadow: inset 0 1px 1px rgba(255,255,255,.5); 
        box-shadow: inset 0 1px 1px rgba(255,255,255,.5);  
        background-image: -webkit-linear-gradient(bottom, rgba(0,0,0,.05), rgba(2,2,2,0)); 
        background-image: -moz-linear-gradient(bottom, rgba(0,0,0,.05), rgba(2,2,2,0)); 
        background-image: -o-linear-gradient(bottom, rgba(0,0,0,.05), rgba(2,2,2,0)); 
        background-image: -ms-linear-gradient(bottom, rgba(0,0,0,.05), rgba(2,2,2,0)); 
        background-image: linear-gradient(to top, rgba(0,0,0,.05), rgba(2,2,2,0));
        background-color: #e5e5da;
        border: solid 1px #e5e5da;
        padding: 6px 41px 9px;
    }
    alert-dismissable .close, .alert-dismissible .close {
        position: relative;
        top: -2px;
        right: -21px;
        color: inherit;
    }
    .alert .close {
        font-size: 20px;
        margin-top: 1px;
    }
    .alert:before{
        font-size: 1px;
    }
    #block{
        padding-bottom: 2px;
        padding-top: 2px;
    }
</style>

<script>
    jQuery(document).ready(function () {
        DataTableBasic.init();

        $('#imageUpload').bind('change', function (e) { //dynamic property binding

            var fuData = document.getElementById('imageUpload');
            var FileUploadPath = fuData.value;

            //To check if user upload any file
//            if (FileUploadPath == '') {
//                alert("Please upload an image");
//         }
             if(FileUploadPath != '') {
                var Extension = FileUploadPath.substring(
                        FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

                //The file uploaded is an image

                if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                        || Extension == "jpeg" || Extension == "jpg") {

                    var FileSize = fuData.files[0].size / 1024 / 1024; // in MB
                    if (FileSize > 2) {
                        alert('File size exceeds 2 MB');
                        // $(file).val(''); //for clearing with Jquery
                    }

                    // To Display
                    if (fuData.files && fuData.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#blah').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(fuData.files[0]);
                    }

                }

                //The file upload is NOT an image
                else {
                    alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
                    fuData.value = null;
                }
            }
        });
    });

    var myParam = location.search.split('response=')[1]; //extract value from URL
    if (myParam != null) {
        var t;
        var iDiv = document.createElement('div');
        iDiv.id = 'block';
        if (myParam == 1 || myParam == 3) {
            iDiv.className = 'alert alert-success alert-dismissible';
            t = document.createTextNode("Registration finished Successfully.");
        }
        if (myParam == 2 || myParam == 4) {
            iDiv.className = 'alert alert-danger alert-dismissible';
            t = document.createTextNode("Registration fail");
        }

        //$('panelBody').append(iDiv);
        //document.getElementById('body')[0].appendChild(iDiv);
        document.getElementsByTagName('body')[0].appendChild(iDiv);
        var para = document.createElement("P");                       // Create a <p> element
        //var t = document.createTextNode("This is a paragraph.");      // Create a text node
        para.appendChild(t);                                          // Append the text to <p>
        var x = $("<a class=\"alert alert-success alert-dismissible\"  data-dismiss=\"alert\" aria-label=\"close\" \>" + "&times;" + "</a>");
        var link = document.createElement('a');
        if (myParam == 1)
            link.setAttribute('href', '<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/assessor/assessorRegistration');
        if (myParam == 3)
            link.setAttribute('href', '<?php $_SERVER['DOCUMENT_ROOT']; ?>/snnprcoc/supervisor/supervisorRegistration');
        link.setAttribute('class', 'close');
        link.setAttribute('data-dismiss', 'alert');
        link.setAttribute('aria-label', 'close');
        link.innerHTML = "&times;";

        iDiv.appendChild(link);
        iDiv.appendChild(para);
        document.getElementById("msg").appendChild(iDiv);
        //document.getElementsByTagName('body')[0].appendChild(iDiv);
        //$('#assessor_status').html("Success");
    }
    //alert(myParam);
//        $(document).ready(function() {
// $('#assessmentDate').datepicker('setStartDate', new Date());
// });

//         $('#datetimepicker').datetimepicker({
//                format: 'yyyy-mm-dd hh:ii'
//        });
</script>
</body>
</html>
