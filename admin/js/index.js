$('#employs').click(()=>{
  $.ajax({
    url:"ajax/employees.php",
    success:function(dat){
      $("#root").html(dat);
    }
  });
});
$("#users").click(()=>{
  $.ajax({
    url:"ajax/users.php",
    success:function(dat){
      $("#root").html(dat);
    }
  });
});
$("#locations").click(()=>{
  $.ajax({
    url:"ajax/locations.php",
    success:function(dat){
      $("#root").html(dat);
    }
  });
});
$("#perentage").click(()=>{
  $.ajax({
    url:"ajax/perentage.php",
    success:function(dat){
      $("#root").html(dat);
    }
  });
});
