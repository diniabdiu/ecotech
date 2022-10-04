// Estimate Calculator JS
let arrcalculated = parseInt($(".arrc").val());
let produktOne = parseInt($("#produkti1").val());
let produktTwo = $("#produkti2");
let produktThree = $("#produkti3");
let productEstimates = [];
let totalWallDimension = 0;
let chooseProdukt = [];
let calcmbul = $("#select");
let finalTotal = 0;

chooseProdukt = $("#first").children();
//  console.log(pickProd, 'here');
$("#estimate-btn").on("click", function () {
  var wallwidth = parseFloat($("#wd-height").val());
  var wallheight = parseFloat($("#wd-width").val());

  if ($("#wd-height").val().length > 0 && $("#wd-width").val().length > 0) {
    totalWallDimension = wallwidth * wallheight;
    $("#gfg").text(totalWallDimension + `\u33A1`);
  }
  $("#choose").css("display", "none");
  if (productEstimates.length >= 16) {
    console.log(productEstimates, "here");
    alert("maximum for calculate wall is 16 !");
    return false;
  }
  if (totalWallDimension === 0) {
    alert("Vlera juaj nuk munde te jete 0");
    return false;
  }
  productEstimates.push(totalWallDimension);
  renderCalcData();
});

function renderCalcData() {
  // reload html
  $(".removeDiv").empty();

  let renderIndex = (i) => {
    return ++i;
  };
  for (let idx in productEstimates) {
    $("#parent-value").append(
      `<div class="removeDiv"><label class="font-rounded-light" for="">Siperfaqja ${renderIndex(
        idx
      )}</label><div id="" class="removewall input-siperfaqe"><button class="arrc btn-gen" type="button"> ${
        productEstimates[idx]
      } \u33A1    </button><span data-idx="${idx}" class="remove"> <i tabindex="1" class="fas fa-minus-circle icon-price"></i><span></div></div>`
    );
  }
}

$("#parent-value").on("click", ".remove", function () {
  let idx = $(this).data("idx");
  productEstimates.splice(idx, 1);
  renderCalcData();
});

$("#totalCalc").on("click", function () {
  finalTotal = 0;

  $("#addCalculate").empty();
  if (productEstimates.length == 0) {
    $("#addCalculate").css("display", "none");
    $("#wd-width").val("0");
    $("#wd-height").val("0");
    $(".removeDiv").remove();
    return false;
  }
  console.log(productEstimates.reduce((a, b) => a + b, 0));
  for (let i = 0; i < productEstimates.length; i++) {
    finalTotal += productEstimates[i];
  }
  let totalEstimate = finalTotal / calcmbul.val();
  // if(totalEstimate === 0) {
  //     alert('err');
  //     return false
  // }
  console.log("here", finalTotal);
  $("#addCalculate").append(
    `Për Sipërfaqen ` +
      finalTotal +
      `\u33A1` +
      ` do të ju duhen përafërsisht ` +
      parseInt(totalEstimate) +
      `l  ngjyrë nga produkti ` +
      calcmbul.find("option:selected").text()
  );
  $("#addCalculate").css("display", "block");

  return false;
});

$("#resetwall").on("click", function () {
  $("#wd-width").val("0");
  $("#wd-height").val("0");
});

$("#estimate-reset-btn").on("click", function () {
  $("#addCalculate").css("display", "none");
  $("#wd-width").val("");
  $("#wd-height").val("");
  $(".removeDiv").remove();
  productEstimates = [];
  console.log();
});
// Estimate Calculator JS
