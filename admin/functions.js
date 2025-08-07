//Data Tables Initialize Start
$(document).ready(function() {
  $('#example').DataTable();
} );
//Data Tables Initialize End

//Removes content after ? in url (It refreshes the page) Start
function splitUrl(){
	url=window.location.href;
	result = url.split('?')[0];
	window.location.href=result;
}
//Removes content after ? in url (It refreshes the page) End

//Removes content after ? in url (It refreshes the page) Start
function hisUrl(){
	url=window.location.href;
	result = url.split('?')[0];
	history.pushState(null, null, result);
}
//Removes content after ? in url (It refreshes the page) End

//Delete Table Row for Delete Opration Start
function delRow(idToDel){
	$(`[data-id=${idToDel}]`).remove();
}
//Delete Table Row for Delete Opration End

//Calls bootstrap modal for update Start
function callModal(){
	$('#updateModal').modal('show');
}
//Calls bootstrap modal for update End

//Function For Toggling Card And List View In Gallery Start
function toggleGalleryView(){
	$('#cardsThead').toggleClass("d-none");
	$('#example').toggleClass("cards");
}
//Function For Toggling Card And List View In Gallery End

//This Function gets the value of checkboxes for batch operations Start
function checkIdString(){
	var a=[],valueString='';
	a=$("input[name=batchSel]:checked").map(function () {return this.value;}).get();
	a=a.join();
	document.getElementById('batchProcessing').value=a;
}
//This Function gets the value of checkboxes for batch operations End

//Function For Delete Confirmation Start
function deleteCheck(loc){
bootbox.confirm({
    message: "Do you Really Want To Delete?",
    size: 'small',
    buttons: {
        confirm: {
            label: '<i class="fa fa-times"></i> Yes',
            className: 'btn-success'
        },
        cancel: {
            label: '<i class="fa fa-check"></i> No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        if (result) {
            window.location.href+=loc;
        }
    }
});
}
//Function For Delete Confirmation End

//Validate Input Type Start
function fileSize(image){
    size=image.files[0].size/1024/1024;
    if (size>2) {
        image.value='';
        alert('File Size Must Be Below 2MB');
        return false;
    }
    return true;
}
//Validate Input Type End