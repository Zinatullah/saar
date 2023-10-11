$(document).ready(function () {
  $("#getQuoteBtn").change(function () {
    var selectedCountry = $(this).val();
    $("#quantity_ID").attr("placeholder", "----");
    $("#port").val( "دا برخه پخپله ډکیږي");
    $("#country").val( "دا برخه پخپله ډکیږي");
    $("#type").val( "دا برخه پخپله ډکیږي");
    $("#mark").val( "دا برخه پخپله ډکیږي");
    $("#quantity").val( "دا برخه پخپله ډکیږي");
    $("#price").val( "دا برخه پخپله ډکیږي");

    $.ajax({
      url: "./forms/form.php?id=" + selectedCountry,
      method: "GET",
      dataType: "json",
      success: function (response) {
        // Clear existing options
        $("#dataContainer").html(
          '<option value="">قرارداد انتخاب کړئ</option>'
        );

        // Add retrieved data as options
        $.each(response, function (index, data) {
          $("#dataContainer").append(
            '<option value="' +
              data.id +
              " : " +
              data.company +
              " - " +
              data.company_foreign +
              '">' +
              data.id +
              " : " +
              data.company +
              " - " +
              data.company_foreign +
              "</option>"
          );
        });
      },
      error: function (xhr, status, error) {
        console.log("Error:", error);
      },
    });
  });
});

$(document).ready(function () {
  $("#dataContainer").change(function () {
    var id = $(this).val();
    var text = "sometext";
    $.ajax({
      url: "./forms/contracts.php?contract_id=" + id,
      method: "GET",
      dataType: "json",
      success: function (response) {
        $.each(response, function (index, data) {
          $("#country").val(data.source_country);
          $("#port").val(data.loading);
          $("#type").val(data.type);
          $("#mark").val(data.mark);
          $("#quantity").val(data.quantity);
          $("#price").val(data.price_per_ton);
        });
      },
      error: function (xhr, status, error) {
        console.log("Error:", error);
      },
    });
  });
});

$(document).ready(function () {
  $("#dataContainer").change(function () {
    var id = $(this).val();
    var url = "./forms/contracts.php?contract_quantity=" + id;
    $.ajax({
      url: url,
      method: "GET",
      dataType: "json",
      success: function (response) {
        $.each(response, function (index, data) {
          $("#quantity_ID").attr("placeholder", data);
          $("#quantity_ID").attr("max", data);
        });
      },
      error: function (xhr, status, error) {
        console.log("Error:", error);
      },
    });
  });
});
