// Ajax for insert data
$("#btnsubmit").click(function(e){
    e.preventDefault();
    console.log("its working");

    let year =$("#admissionYear").val()
    let prgm =$("#programme").val()
    let rgFee =$("#registrationFee").val()
    let elbCri =$("#eligibilityCriteria").val()
    let stdname =$("#studentName").val()
    let ftrname =$("#fatherName").val()
    let mthrname =$("#motherName").val()
    let stdCat =$("#studentCategory").val()
    let feeCtg =$("#feeCategory").val()
    let appFee =$("#applicationFee").val()
    let stdContactNo =$("#studentContactNo").val()
    let altrNo =$("#alternateNumber").val()
    let stdEmail =$("#studentEmail").val()

    mydata = {
        year: year,
        programme: prgm,
        registrationFee: rgFee,
        eligibilityCriteria: elbCri,
        studentName: stdname,
        fatherName: ftrname,
        motherName: mthrname,
        studentCategory: stdCat,
        feeCategory: feeCtg,
        applicationFee: appFee,
        studentContactNo: stdContactNo,
        alternateNumber: altrNo,
        studentEmail: stdEmail
    };

    $.ajax({
        url : "insert.php",
        method : "POST",
        data : JSON.stringify(mydata),
        success: function(data){
        $("#myform")[0].reset();
        },
    });

    

});



function register(){

}