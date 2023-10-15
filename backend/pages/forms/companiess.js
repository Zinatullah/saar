$(document).ready(function () {
  $("#getQuoteBtn").change(function () {
    var selectedCountry = $(this).val();
    $("#quantity_ID").attr("placeholder", "----");
    $("#port").val("دا برخه پخپله ډکیږي");
    $("#country").val("دا برخه پخپله ډکیږي");
    $("#type").val("دا برخه پخپله ډکیږي");
    $("#mark").val("دا برخه پخپله ډکیږي");
    $("#quantity").val("دا برخه پخپله ډکیږي");
    $("#price").val("دا برخه پخپله ډکیږي");
    $("#remain_quantity").val("دا برخه پخپله ډکیږي");
    $("#imported_quantity").val("دا برخه پخپله ډکیږي");

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

var already_imported_quantity = 0;
var total_contract_quantity = 0;
var contract_purchase = 0;

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
          total_contract_quantity = data.quantity;
          $("#country").val(data.source_country);
          $("#port").val(data.loading);
          $("#type").val(data.type);
          $("#mark").val(data.mark);
          $("#quantity").val(data.quantity);
          $("#price").val(data.price_per_ton);
          contract_purchase = data.price_per_ton;
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
          already_imported_quantity = data;
          $("#quantity_ID").attr("max", data);
          $("#remain_quantity").val(data);
          $("#imported_quantity").val(total_contract_quantity - data);
          console.log(total_contract_quantity);
        });
      },
      error: function (xhr, status, error) {
        console.log("Error:", error);
      },
    });
  });
});

$(document).ready(function () {
  $("#quantity_ID").keyup(function () {
    var value = $("#quantity_ID").val();
    var dolar_price = $("#dolar_price").val();
    var service_fees = $("#service_fees").val();
    var fifteen_days = $("#fifteen_days").val();
    // console.log(service_fees)
    fifteen_days = fifteen_days / 1000;
    // console.log(fifteen_days)
    // console.log(parseInt(fifteen_days) * parseInt(service_fees) * parseInt(dolar_price))
    var material_price = (value * service_fees ) / 100;
    // console.log(material_price * fifteen_days * dolar_price)
    $("#material_price").val(material_price);
    $("#afs_price").val(material_price * fifteen_days * dolar_price);
    $("#dol_price").val(material_price * fifteen_days);
  });
});
