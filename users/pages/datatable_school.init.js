

$(document).ready(function() {
    $('#datatable').DataTable( {
    	"order": [[ 0, "desc" ]],
    	responsive: true,
    	pagingType: "numbers",
        dom: 'lBfrtip',
        buttons: ['csv', 'pdf', 'print'

        ],
        

        

    } );
} );


// var today = new Date();
// var dd = String(today.getDate()).padStart(2, '0');
// var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
// var yyyy = today.getFullYear();

// today = mm + '/' + dd + '/' + yyyy;
// if (today>="01/18/2020") {
// window.open('alert_msg.php','_self');
// }else{

// }




