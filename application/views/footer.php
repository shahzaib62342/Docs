<footer id="footer" class="footer text-center">
    <div class="container">
        <small class="copyright">2019 - All Rights Reserved Developed   by <a href="venuehook.com" target="_blank">Venuehook</a> </small>
    </div>
  
</footer>
<!-- Main Javascript -->
<script type="text/javascript" src="<?= base_url('Assets/plugins/jquery-3.3.1.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('Assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('Assets/plugins/prism/prism.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('Assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('Assets/plugins/stickyfill/dist/stickyfill.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('Assets/js/main.js') ?>"></script>

<div class="fixed-bottom text-right"; style="margin-bottom:5px;margin-right: 5px">
    <button type="button" id="btnShowPopup" class="btn btn-info btn-lg">Help <i class="fas fa-question"></i></button>
</div>
<!-- Modal Popup -->
<div id="MyPopup" class="modal fade" role="dialog">
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    	<div class="text-right">
                    <input type="submit" name="submit" value="X" data-dismiss="modal" class="btn btn-danger">
                 </div>
        <div class="modal-body">
           <div style="margin-left: -16px;margin-top: -1px">
             <img height="180px" class="rounded" width="498px" src="<?= base_url('Assets/images/help.png') ?>"/> 

           </div>

              <br>
            <form>
                <div class="form-group";>
                    <label for="inputEmail4">Name<span class="text-danger font-weight-bold"> *</span></label>
                    <input type="text" required class="form-control" id="inputEmail4" placeholder="Enter Full Name">
                </div>
                <div class="form-group">
                    <label for="inputPassword4">Email<span class="text-danger font-weight-bold"> *</span></label>
                    <input type="email" required class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
    				<label for="exampleFormControlTextarea1">Describe What are you Looking?</label>
    				<textarea resize: none; rows="3" cols="80" class="form-control" placeholder="Write Something" id="exampleFormControlTextarea1" rows="3">   					
    				</textarea>
  				</div>
                <div class="text-right">
                    <input type="submit" value="Submit" class="btn btn-primary"/>
                </div>
                
                
            </form>
        </div>
    </div>
</div>

<!-- Help Model Show by jQuery -->
<script>
    $(function () {

        $("#btnShowPopup").click(function () {
            $("#MyPopup").modal("show");
        });
    });
</script>
</body>
</html>