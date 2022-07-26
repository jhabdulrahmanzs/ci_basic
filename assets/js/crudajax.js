$(document).ready(function() {

    //  insert data
    $("#saveEmpForm").click(function() {
        var empName = $('#name').val();
        var empEmail = $('#email').val();
        var empPhone = $('#phone').val();
        var empCity = $('#city').val();
        alert('form')
        $.ajax({
            type: "POST",
            url: "CrudAjax/save",
            dataType: "JSON",
            data: { name: empName, email: empEmail, phone: empPhone, city: empCity },
            success: function(data) {
                $('#name').val("");
                $('#email').val("");
                $('#phone').val("");
                $('#city').val("");
                ///listEmployee();
            }
        });
        return false;
    });

    // show
    $.ajax({
        url: "get",
        type: "POST",
        dataType: "json",
        success: function(data) {
            // alert(data)
            var html = '';
            for (var i = 0; i < data.length; i++) {
                console.log(data)
                    //console.log(data[i].id)
                html += '<tr id="' + data[i].id + '">' +
                    '<td>' + data[i].name + '</td>' +
                    '<td>' + data[i].email + '</td>' +
                    '<td>' + data[i].phone + '</td>' +
                    '<td>' + data[i].city + '</td>' +
                    '<td> <button type="button" class="btn btn-sm btn-primary" id="btn_update_id" onclick="Updatedata(' + data[i].id + ')" value="Update">Update</button></td>' +
                    '<td> <button type="button" class="btn btn-sm btn-danger" id="btn_Delete_id" onclick="Deletedata()" value="Delete">Delete</button></td>'
                '</tr>';
            }
            $('#listRecords').html(html);
        }
    });

    // update



});

function Updatedata(id) {
    alert(id);
}