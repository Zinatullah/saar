$(document).ready(function () {
  $("#getQuoteBtn").change(function () {
    var selectedCountry = $(this).val();
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
    $.ajax({
      url: "./forms/contracts.php?contract_id=" + id,
      method: "GET",
      dataType: "json",
      success: function (response) {
        $.each(response, function (index, data) {
          console.log(response)
          $("#country").val(data.source_country)
          $("#type").val(data.type)
          $("#mark").val(data.mark)
          $("#quantity").val(data.quantity)
          $("#price").val(data.price_per_ton)
          // $("#dataContainer").append(
          //   '<option value="' +
          //     data.id +
          //     '">' +
          //     data.id +
          //     " : " +
          //     data.company +
          //     " - " +
          //     data.company_foreign +
          //     "</option>"
          // );
        }
        );
      },
      error: function (xhr, status, error) {
        console.log("Error:", error);
      },
    });
  });
});
