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
    var selectedCountry = $(this).val();
    console.log(selectedCountry);
    $.ajax({
      url: "./forms/form.php?id=" + selectedCountry,
      method: "GET",
      dataType: "json",
      //   success: function (response) {
      //     // Clear existing options
      //     $("#dataContainer").html('<option value="">قرارداد انتخاب کړئ</option>');

      //     // Add retrieved data as options
      //     $.each(response, function (index, data) {
      //       $("#dataContainer").append(
      //         '<option value="' + data.company + '">' + data.company + '-' + data.company_foreign + "</option>"
      //       );
      //     });
      //   },
      error: function (xhr, status, error) {
        console.log("Error:", error);
      },
    });
  });
});
