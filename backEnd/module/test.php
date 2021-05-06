<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		html {
  box-sizing: border-box;
}
*,
*:before,
*:after {
  box-sizing: inherit;
}
.cf:before,
.cf:after {
  display: table;
  content: ' ';
}
.cf:after {
  clear: both;
}
.cf {
  *zoom: 1;
}
body {
  font-family: 'Roboto', Arial, sans-serif;
  margin: 0;
  color: #555;
  background-color: #f5f7fa;
}
img {
  max-width: 100%;
  height: auto;
}
figure {
  margin: 0;
  padding: 10px;
}
figure a {
  display: block;
}
mark {
  padding: 0 5px;
  background-color: #ddd;
}
::backdrop {
  background-color: rgba(0, 0, 0, 0.5);
}
.btn {
  padding: 10px 15px;
  cursor: pointer;
  color: #555;
  border-width: 1px;
  border-style: solid;
  border-radius: 3px;
  background-color: #f3f3f3;
}
.btn.disabled {
  cursor: not-allowed;
  color: #ddd;
  border-color: #ddd;
}
.btn-group {
  padding: 15px 20px;
  text-align: right;
  background-color: #f5f6f8;
}
.btn-primary {
  color: #fff;
  border-color: #0066c0;
  background-color: #0074d9;
}
.btn-primary:hover {
  background-color: #0066c0;
}
.btn-danger {
  color: #fff;
  border-color: #ab3326;
  background-color: #c0392b;
}
.btn-danger:hover {
  background-color: #ab3326;
}
.btn-cancel {
  color: #999;
  border-color: #ddd;
}
.btn-cancel:hover {
  background-color: #e6e6e6;
}
.site-header {
  text-align: center;
  background-color: #196e76;
}
.site-header h1,
.site-header a {
  padding: 15px;
  text-transform: uppercase;
  color: #fff;
}
.site-header h1 {
  font-size: 18px;
  margin: 0;
}
.site-header a {
  font-size: 14px;
  font-weight: 300;
  display: block;
  text-decoration: none;
  background-color: #10474c;
}
.boxed-group {
  width: 90%;
  max-width: 680px;
  margin-top: 50px;
  margin-right: auto;
  margin-left: auto;
}
.boxed-group h3,
.boxed-group h4 {
  font-weight: 400;
  margin: 0;
}
.boxed-group h3 {
  padding: 12px 20px;
  color: #fff;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  background-color: #434a54;
}
.boxed-group h4 {
  font-size: 18px;
  color: #555;
}
.boxed-group section {
  padding: 30px 20px;
}
.boxed-group section:first-child {
  border-bottom: 1px solid #e6e9ed;
}
.boxed-group section:only-of-type,
.boxed-group section:only-child {
  border-bottom: 0;
}
.boxed-group .boxed-group-inner {
  font-size: 14px;
  font-weight: 300;
  color: #aaa;
  border-width: 0 1px 1px;
  border-style: solid;
  border-color: #e6e9ed;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  background-color: #fff;
}
.boxed-group .btn {
  float: right;
  margin-left: 20px;
}
.site-dialog {
  overflow: hidden;
  width: 95%;
  max-width: 500px;
  padding: 0;
  border-width: 0;
  border-radius: 5px;
  background: transparent;
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.3);
  visibility: hidden;
  transform: scale(0.1);
  transition: transform 200ms;
}
.site-dialog.dialog-scale {
  visibility: visible;
  transform: scale(1);
}
.site-dialog h1 {
  font-size: 16px;
  font-weight: normal;
  margin: 0;
  color: #fff;
}
.site-dialog p {
  font-size: 14px;
}
.site-dialog .dialog-header {
  padding: 12px 20px;
  background-color: #434a54;
}
.site-dialog .dialog-content {
  padding: 30px 20px;
  color: #555;
  background-color: #fff;
}
.site-dialog .dialog-content p:last-of-type,
.site-dialog .dialog-content p:only-child {
  margin-top: 0;
  margin-bottom: 0;
}
	</style>
</head>
<body>
   <div class="site-content cf">
  <div class="boxed-group dangerzone">

    <h3>Account</h3>

    <div class="boxed-group-inner">
      <section>
        <h4>Delete this account</h4>

        <button class="btn btn-danger boxed-action" id="delete-account">Delete Account</button>
        <p>This action is permanent; think twice before proceeding!</p>

        <dialog id="confirm-delete" class="site-dialog">
          <header class="dialog-header">
            <h1>Please Confirm</h1>
          </header>
          <div class="dialog-content">
            <p>You are about to close your account. This action is irreversible. It will permanently delete your account along with its associated data. Are you sure you want to continue?</p>
          </div>
          <div class="btn-group cf">
            <button class="btn btn-danger" id="delete">Delete</button>
            <button class="btn btn-cancel" id="cancel">Cancel</button>

          </div>
        </dialog>

      </section>
    </div>
  </div>
</div>   
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	(function($) {
  'use strict';

  var $accountDelete       = $('#delete-account'),
    $accountDeleteDialog = $('#confirm-delete'),
    transition;

  $accountDelete.on('click', function() {
    $accountDeleteDialog[0].showModal();
    transition = window.setTimeout(function() {
        $accountDeleteDialog.addClass('dialog-scale');
    }, 0.5);
  });

  $('#cancel').on('click', function() {
    $accountDeleteDialog[0].close();
    $accountDeleteDialog.removeClass('dialog-scale');
    clearTimeout(transition);
  });

})(jQuery);
</script>