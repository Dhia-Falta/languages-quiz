var score = 0; //Initial score
var total = 40; //total number of questions
var point = 1; //Points per correct answer
var highest = total * point; //equation for highest score

//Initialize 
function init(){
//English Correct Answers are set below 
  sessionStorage.setItem('a1','c');//This basically says that for question 1, the answer is B
  sessionStorage.setItem('a2','b');
  sessionStorage.setItem('a3','c');
  sessionStorage.setItem('a4','c');
  sessionStorage.setItem('a5','a');
  sessionStorage.setItem('a6','b');
  sessionStorage.setItem('a7','d');
  sessionStorage.setItem('a8','a');
  sessionStorage.setItem('a9','a');
  sessionStorage.setItem('a10','d');
  sessionStorage.setItem('a11','a');
  sessionStorage.setItem('a12','c');
  sessionStorage.setItem('a13','b');
  sessionStorage.setItem('a14','d');
  sessionStorage.setItem('a15','a');
  sessionStorage.setItem('a16','c');
  sessionStorage.setItem('a17','a');
  sessionStorage.setItem('a18','c');
  sessionStorage.setItem('a19','b');
  sessionStorage.setItem('a20','d');
  sessionStorage.setItem('a21','a');
  sessionStorage.setItem('a22','c');
  sessionStorage.setItem('a23','a');
  sessionStorage.setItem('a24','c');
  sessionStorage.setItem('a25','b');
  sessionStorage.setItem('a26','a');
  sessionStorage.setItem('a27','d');
  sessionStorage.setItem('a28','c');
  sessionStorage.setItem('a29','a');
  sessionStorage.setItem('a30','c');
  sessionStorage.setItem('a31','b');
  sessionStorage.setItem('a32','a');
  sessionStorage.setItem('a33','a');
  sessionStorage.setItem('a34','c');
  sessionStorage.setItem('a35','c');
  sessionStorage.setItem('a36','a');
  sessionStorage.setItem('a37','c');
  sessionStorage.setItem('a38','c');
  sessionStorage.setItem('a39','b');
  sessionStorage.setItem('a40','c');

//French Correct Answers are set below
  sessionStorage.setItem('fra1','c');
  sessionStorage.setItem('fra2','b');
  sessionStorage.setItem('fra3','c');
  sessionStorage.setItem('fra4','c');
  sessionStorage.setItem('fra5','a');
  sessionStorage.setItem('fra6','b');
  sessionStorage.setItem('fra7','d');
  sessionStorage.setItem('fra8','a');
  sessionStorage.setItem('fra9','a');
  sessionStorage.setItem('fra10','d');
  sessionStorage.setItem('fra11','a');
  sessionStorage.setItem('fra12','c');
  sessionStorage.setItem('fra13','b');
  sessionStorage.setItem('fra14','c');
  sessionStorage.setItem('fra15','c');
  sessionStorage.setItem('fra16','c');
  sessionStorage.setItem('fra17','a');
  sessionStorage.setItem('fra18','c');
  sessionStorage.setItem('fra19','b');
  sessionStorage.setItem('fra20','b');
  sessionStorage.setItem('fra21','a');
  sessionStorage.setItem('fra22','a');
  sessionStorage.setItem('fra23','b');
  sessionStorage.setItem('fra24','a');
  sessionStorage.setItem('fra25','b');
  sessionStorage.setItem('fra26','a');
  sessionStorage.setItem('fra27','d');
  sessionStorage.setItem('fra28','a');
  sessionStorage.setItem('fra29','a');
  sessionStorage.setItem('fra30','c');
  sessionStorage.setItem('fra31','b');
  sessionStorage.setItem('fra32','a');
  sessionStorage.setItem('fra33','a');
  sessionStorage.setItem('fra34','c');
  sessionStorage.setItem('fra35','a');
  sessionStorage.setItem('fra36','a');
  sessionStorage.setItem('fra37','c');
  sessionStorage.setItem('fra38','d');
  sessionStorage.setItem('fra39','c');
  sessionStorage.setItem('fra40','c');

//Turkish Correct Answers are set below
  sessionStorage.setItem('tra1','a');
  sessionStorage.setItem('tra2','b');
  sessionStorage.setItem('tra3','b');
  sessionStorage.setItem('tra4','b');
  sessionStorage.setItem('tra5','a');
  sessionStorage.setItem('tra6','d');
  sessionStorage.setItem('tra7','a');
  sessionStorage.setItem('tra8','d');
  sessionStorage.setItem('tra9','b');
  sessionStorage.setItem('tra10','c');
  sessionStorage.setItem('tra11','d');
  sessionStorage.setItem('tra12','d');
  sessionStorage.setItem('tra13','b');
  sessionStorage.setItem('tra14','b');
  sessionStorage.setItem('tra15','c');
  sessionStorage.setItem('tra16','a');
  sessionStorage.setItem('tra17','a');
  sessionStorage.setItem('tra18','a');
  sessionStorage.setItem('tra19','a');
  sessionStorage.setItem('tra20','b');
  sessionStorage.setItem('tra21','a');
  sessionStorage.setItem('tra22','c');
  sessionStorage.setItem('tra23','d');
  sessionStorage.setItem('tra24','b');
  sessionStorage.setItem('tra25','d');
  sessionStorage.setItem('tra26','c');
  sessionStorage.setItem('tra27','a');
  sessionStorage.setItem('tra28','c');
  sessionStorage.setItem('tra29','d');
  sessionStorage.setItem('tra30','c');//
  sessionStorage.setItem('tra31','b');
  sessionStorage.setItem('tra32','a');
  sessionStorage.setItem('tra33','a');
  sessionStorage.setItem('tra34','c');
  sessionStorage.setItem('tra35','a');
  sessionStorage.setItem('tra36','a');
  sessionStorage.setItem('tra37','c');
  sessionStorage.setItem('tra38','d');
  sessionStorage.setItem('tra39','c');
  sessionStorage.setItem('tra40','c');

//German Correct Answers are set below
  sessionStorage.setItem('gra1','c');
  sessionStorage.setItem('gra2','b');
  sessionStorage.setItem('gra3','d');
  sessionStorage.setItem('gra4','b');
  sessionStorage.setItem('gra5','a');
  sessionStorage.setItem('gra6','c');
  sessionStorage.setItem('gra7','b');
  sessionStorage.setItem('gra8','c');
  sessionStorage.setItem('gra9','a');
  sessionStorage.setItem('gra10','a');
  sessionStorage.setItem('gra11','b');
  sessionStorage.setItem('gra12','d');
  sessionStorage.setItem('gra13','b');
  sessionStorage.setItem('gra14','a');
  sessionStorage.setItem('gra15','b');
  sessionStorage.setItem('gra16','a');
  sessionStorage.setItem('gra17','b');
  sessionStorage.setItem('gra18','c');
  sessionStorage.setItem('gra19','d');
  sessionStorage.setItem('gra20','a');
  sessionStorage.setItem('gra21','a');
  sessionStorage.setItem('gra22','a');
  sessionStorage.setItem('gra23','a');
  sessionStorage.setItem('gra24','b');
  sessionStorage.setItem('gra25','a');
  sessionStorage.setItem('gra26','d');
  sessionStorage.setItem('gra27','a');
  sessionStorage.setItem('gra28','b');
  sessionStorage.setItem('gra29','d');
  sessionStorage.setItem('gra30','b');
  sessionStorage.setItem('gra31','b');
  sessionStorage.setItem('gra32','a');
  sessionStorage.setItem('gra33','b');
  sessionStorage.setItem('gra34','b');
  sessionStorage.setItem('gra35','c');
  sessionStorage.setItem('gra36','a');
  sessionStorage.setItem('gra37','b');
  sessionStorage.setItem('gra38','c');
  sessionStorage.setItem('gra39','a');
  sessionStorage.setItem('gra40','c');

//Italien Correct Answers are set below
  sessionStorage.setItem('ita1','a');
  sessionStorage.setItem('ita2','d');
  sessionStorage.setItem('ita3','a');
  sessionStorage.setItem('ita4','c');
  sessionStorage.setItem('ita5','d');
  sessionStorage.setItem('ita6','b');
  sessionStorage.setItem('ita7','c');
  sessionStorage.setItem('ita8','b');
  sessionStorage.setItem('ita9','d');
  sessionStorage.setItem('ita10','a');
  sessionStorage.setItem('ita11','c');
  sessionStorage.setItem('ita12','b');
  sessionStorage.setItem('ita13','a');
  sessionStorage.setItem('ita14','c');
  sessionStorage.setItem('ita15','d');
  sessionStorage.setItem('ita16','b');
  sessionStorage.setItem('ita17','b');
  sessionStorage.setItem('ita18','c');
  sessionStorage.setItem('ita19','a');
  sessionStorage.setItem('ita20','d');
  sessionStorage.setItem('ita21','d');
  sessionStorage.setItem('ita22','a');
  sessionStorage.setItem('ita23','c');
  sessionStorage.setItem('ita24','b');
  sessionStorage.setItem('ita25','a');
  sessionStorage.setItem('ita26','d');
  sessionStorage.setItem('ita27','b');
  sessionStorage.setItem('ita28','a');
  sessionStorage.setItem('ita29','c');
  sessionStorage.setItem('ita30','c');
  sessionStorage.setItem('ita31','b');
  sessionStorage.setItem('ita32','a');
  sessionStorage.setItem('ita33','d');
  sessionStorage.setItem('ita34','a');
  sessionStorage.setItem('ita35','c');
  sessionStorage.setItem('ita36','b');
  sessionStorage.setItem('ita37','d');
  sessionStorage.setItem('ita38','c');
  sessionStorage.setItem('ita39','a');
  sessionStorage.setItem('ita40','b');    

//spanish Correct Answers are set below
  sessionStorage.setItem('spa1','d');
  sessionStorage.setItem('spa2','c');
  sessionStorage.setItem('spa3','b');
  sessionStorage.setItem('spa4','c');
  sessionStorage.setItem('spa5','c');
  sessionStorage.setItem('spa6','d');
  sessionStorage.setItem('spa7','d');
  sessionStorage.setItem('spa8','b');
  sessionStorage.setItem('spa9','c');
  sessionStorage.setItem('spa10','c');
  sessionStorage.setItem('spa11','d');
  sessionStorage.setItem('spa12','c');
  sessionStorage.setItem('spa13','d');
  sessionStorage.setItem('spa14','b');
  sessionStorage.setItem('spa15','b');
  sessionStorage.setItem('spa16','c');
  sessionStorage.setItem('spa17','c');
  sessionStorage.setItem('spa18','d');
  sessionStorage.setItem('spa19','a');
  sessionStorage.setItem('spa20','c');
  sessionStorage.setItem('spa21','c');
  sessionStorage.setItem('spa22','c');
  sessionStorage.setItem('spa23','d');
  sessionStorage.setItem('spa24','b');
  sessionStorage.setItem('spa25','c');
  sessionStorage.setItem('spa26','c');
  sessionStorage.setItem('spa27','d');
  sessionStorage.setItem('spa28','c');
  sessionStorage.setItem('spa29','b');
  sessionStorage.setItem('spa30','b');
  sessionStorage.setItem('spa31','b');
  sessionStorage.setItem('spa32','b');
  sessionStorage.setItem('spa33','b');
  sessionStorage.setItem('spa34','a');
  sessionStorage.setItem('spa35','c');
  sessionStorage.setItem('spa36','a');
  sessionStorage.setItem('spa37','c');
  sessionStorage.setItem('spa38','b');
  sessionStorage.setItem('spa39','b');
  sessionStorage.setItem('spa40','c');

//russian Correct Answers are set below
  sessionStorage.setItem('rua1','c');
  sessionStorage.setItem('rua2','b');
  sessionStorage.setItem('rua3','c');
  sessionStorage.setItem('rua4','c');
  sessionStorage.setItem('rua5','a');
  sessionStorage.setItem('rua6','b');
  sessionStorage.setItem('rua7','d');
  sessionStorage.setItem('rua8','a');
  sessionStorage.setItem('rua9','a');
  sessionStorage.setItem('rua10','d');
  sessionStorage.setItem('rua11','a');
  sessionStorage.setItem('rua12','c');
  sessionStorage.setItem('rua13','b');
  sessionStorage.setItem('rua14','c');
  sessionStorage.setItem('rua15','c');
  sessionStorage.setItem('rua16','c');
  sessionStorage.setItem('rua17','a');
  sessionStorage.setItem('rua18','c');
  sessionStorage.setItem('rua19','b');
  sessionStorage.setItem('rua20','b');
  sessionStorage.setItem('rua21','a');
  sessionStorage.setItem('rua22','a');
  sessionStorage.setItem('rua23','b');
  sessionStorage.setItem('rua24','a');
  sessionStorage.setItem('rua25','b');
  sessionStorage.setItem('rua26','a');
  sessionStorage.setItem('rua27','d');
  sessionStorage.setItem('rua28','a');
  sessionStorage.setItem('rua29','a');
  sessionStorage.setItem('rua30','c');
  sessionStorage.setItem('rua31','b');
  sessionStorage.setItem('rua32','a');
  sessionStorage.setItem('rua33','a');
  sessionStorage.setItem('rua34','c');
  sessionStorage.setItem('rua35','a');
  sessionStorage.setItem('rua36','a');
  sessionStorage.setItem('rua37','c');
  sessionStorage.setItem('rua38','d');
  sessionStorage.setItem('rua39','c');
  sessionStorage.setItem('rua40','c');
}

$(document).ready(function(){
// hide & show fieldset

  //show informations fieldset  
  $(".flags, .en-test, .fr-test, .tr-test, .gr-test, .it-test, .sp-test, .ru-test, .result").hide();
  $(".informations").show();
  
  //show flags fieldset 
  $(".next").click(function(event){
    var form = document.getElementById("form");
    var isValidForm = form.checkValidity();
      if(isValidForm) {
          $(".flags").show();
          $(".infomations").hide();
          event.preventDefault();
      }
  });
  
  //show EN or FR or TUR or GER test fieldset
  $('.next').click(function() {
  if($('#en-input').is(':checked')) {
   $(".en-test").prop('disabled', false);///// this sooo nice 
   $(".en-test").show();
   $(".flags").hide();
    } 
    else if($('#fr-input').is(':checked')) {
     $(".fr-test").prop('disabled', false);
     $(".fr-test").show();
     $(".flags").hide();  
    }
    else if($('#tr-input').is(':checked')) {
     $(".tr-test").prop('disabled', false);
     $(".tr-test").show();
     $(".flags").hide();  
    }
    else if($('#ger-input').is(':checked')) {
     $(".gr-test").prop('disabled', false);
     $(".gr-test").show();
     $(".flags").hide();  
    }
    else if($('#it-input').is(':checked')) {
     $(".it-test").prop('disabled', false);
     $(".it-test").show();
     $(".flags").hide();  
    }
    else if($('#sp-input').is(':checked')) {
     $(".sp-test").prop('disabled', false);
     $(".sp-test").show();
     $(".flags").hide();  
    }
    else if($('#ru-input').is(':checked')) {
     $(".ru-test").prop('disabled', false);
     $(".ru-test").show();
     $(".flags").hide();  
    }
  });

  $(".back-flag").click(function(){
    $(".flags").hide();
    $(".infomations").show();
  });

  $(".back-test").click(function(){
    $(".flags").show();
    $(".en-test, .fr-test, .tr-test, .gr-test, .it-test, .sp-test, .ru-test").hide();
    $(".en-test, .fr-test, .tr-test, .gr-test, .it-test, .sp-test, .ru-test").prop('disabled', true);
  });

// EN process & show result test
  $(".next-en-test").click(function(event){

    var form = document.getElementById("form");
    var isValidForm = form.checkValidity();
      if(isValidForm) {
          $(".result").show();
          $(".en-test").hide();

    process("q1");
    process("q2");
    process("q3");
    process("q4");
    process("q5");
    process("q6");
    process("q7");
    process("q8");
    process("q9");
    process("q10");
    process("q11");
    process("q12");
    process("q13");
    process("q14");
    process("q15");
    process("q16");
    process("q17");
    process("q18");
    process("q19");
    process("q20");
    process("q21");
    process("q22");
    process("q23");
    process("q24");
    process("q25");
    process("q26");
    process("q27");
    process("q28");
    process("q29");
    process("q30");
    process("q31");
    process("q32");
    process("q33");
    process("q34");
    process("q35");
    process("q36");
    process("q37");
    process("q38");
    process("q39");
    process("q40");
    
    document.getElementById('result').value = score;
    if (score >= 40) {
      $('.result').append('<input type="radio" name="rating" value="Proficient" checked style="display: none;">');
    } else if (score <= 39 && score >= 36) {
      $('.result').append('<input type="radio" name="rating" value="Advanced" checked style="display: none;">');
    }

    else if (score <= 35 && score >= 30) {
      $('.result').append('<input type="radio" name="rating" value="Upper Intermediate" checked style="display: none;">');
    }

    else if (score <= 29 && score >= 20) {
      $('.result').append('<input type="radio" name="rating" value="Intermediate" checked style="display: none;">');
    }

    else if (score <= 19 && score >= 10) {
      $('.result').append('<input type="radio" name="rating" value="Elementray" checked style="display: none;">');
    }

    else if (score <= 9 && score >= 0) {
      $('.result').append('<input type="radio" name="rating" value="Beginner" checked style="display: none;">');
    }

    $(".result").append('<div><p>للإطلاع على نتائج الإختبار، الرجاء زيارة مقرنا.</p></div><div><button class="btn btn-primary" name="enregister">register</button></div><br><span>4 / 4</span>');
    
    event.preventDefault();
  }
  });

// FR process & show result test
  $(".next-fr-test").click(function(event){

    var form = document.getElementById("form");
    var isValidForm = form.checkValidity();
      if(isValidForm) {
          $(".result").show();
          $(".fr-test").hide();

    process("fr1");
    process("fr2");
    process("fr3");
    process("fr4");
    process("fr5");
    process("fr6");
    process("fr7");
    process("fr8");
    process("fr9");
    process("fr10");
    process("fr11");
    process("fr12");
    process("fr13");
    process("fr14");
    process("fr15");
    process("fr16");
    process("fr17");
    process("fr18");
    process("fr19");
    process("fr20");
    process("fr21");
    process("fr22");
    process("fr23");
    process("fr24");
    process("fr25");
    process("fr26");
    process("fr27");
    process("fr28");
    process("fr29");
    process("fr30");
    process("fr31");
    process("fr32");
    process("fr33");
    process("fr34");
    process("fr35");
    process("fr36");
    process("fr37");
    process("fr38");
    process("fr39");
    process("fr40");
    
    document.getElementById('result').value = score;
    if (score >= 40) {
      $('.result').append('<input type="radio" name="rating" value="Proficient" checked style="display: none;">');
    } else if (score <= 39 && score >= 36) {
      $('.result').append('<input type="radio" name="rating" value="Advanced" checked style="display: none;">');
    }

    else if (score <= 35 && score >= 30) {
      $('.result').append('<input type="radio" name="rating" value="Upper Intermediate" checked style="display: none;">');
    }

    else if (score <= 29 && score >= 20) {
      $('.result').append('<input type="radio" name="rating" value="Intermediate" checked style="display: none;">');
    }

    else if (score <= 19 && score >= 10) {
      $('.result').append('<input type="radio" name="rating" value="Elementray" checked style="display: none;">');
    }

    else if (score <= 9 && score >= 0) {
      $('.result').append('<input type="radio" name="rating" value="Beginner" checked style="display: none;">');
    }

    $(".result").append('<div><p>للإطلاع على نتائج الإختبار، الرجاء زيارة مقرنا.</p></div><div><button class="btn btn-primary" name="frregister">register</button></div><br><span>4 / 4</span>');
    
    event.preventDefault();
  }
  });

// TR process & show result test
  $(".next-tr-test").click(function(event){

    var form = document.getElementById("form");
    var isValidForm = form.checkValidity();
      if(isValidForm) {
          $(".result").show();
          $(".tr-test").hide();

    process("tr1");
    process("tr2");
    process("tr3");
    process("tr4");
    process("tr5");
    process("tr6");
    process("tr7");
    process("tr8");
    process("tr9");
    process("tr10");
    process("tr11");
    process("tr12");
    process("tr13");
    process("tr14");
    process("tr15");
    process("tr16");
    process("tr17");
    process("tr18");
    process("tr19");
    process("tr20");
    process("tr21");
    process("tr22");
    process("tr23");
    process("tr24");
    process("tr25");
    process("tr26");
    process("tr27");
    process("tr28");
    process("tr29");
    process("tr30");
    process("tr31");
    process("tr32");
    process("tr33");
    process("tr34");
    process("tr35");
    process("tr36");
    process("tr37");
    process("tr38");
    process("tr39");
    process("tr40");
    
    document.getElementById('result').value = score;
    if (score >= 40) {
      $('.result').append('<input type="radio" name="rating" value="Proficient" checked style="display: none;">');
    } else if (score <= 39 && score >= 36) {
      $('.result').append('<input type="radio" name="rating" value="Advanced" checked style="display: none;">');
    }

    else if (score <= 35 && score >= 30) {
      $('.result').append('<input type="radio" name="rating" value="Upper Intermediate" checked style="display: none;">');
    }

    else if (score <= 29 && score >= 20) {
      $('.result').append('<input type="radio" name="rating" value="Intermediate" checked style="display: none;">');
    }

    else if (score <= 19 && score >= 10) {
      $('.result').append('<input type="radio" name="rating" value="Elementray" checked style="display: none;">');
    }

    else if (score <= 9 && score >= 0) {
      $('.result').append('<input type="radio" name="rating" value="Beginner" checked style="display: none;">');
    }

    $(".result").append('<div><p>للإطلاع على نتائج الإختبار، الرجاء زيارة مقرنا.</p></div><div><button class="btn btn-primary" name="trregister">register</button></div><br><span>4 / 4</span>');
    
    event.preventDefault();
  }
  });

// GR process & show result test
  $(".next-gr-test").click(function(event){

    var form = document.getElementById("form");
    var isValidForm = form.checkValidity();
      if(isValidForm) {
          $(".result").show();
          $(".gr-test").hide();

    process("gr1");
    process("gr2");
    process("gr3");
    process("gr4");
    process("gr5");
    process("gr6");
    process("gr7");
    process("gr8");
    process("gr9");
    process("gr10");
    process("gr11");
    process("gr12");
    process("gr13");
    process("gr14");
    process("gr15");
    process("gr16");
    process("gr17");
    process("gr18");
    process("gr19");
    process("gr20");
    process("gr21");
    process("gr22");
    process("gr23");
    process("gr24");
    process("gr25");
    process("gr26");
    process("gr27");
    process("gr28");
    process("gr29");
    process("gr30");
    process("gr31");
    process("gr32");
    process("gr33");
    process("gr34");
    process("gr35");
    process("gr36");
    process("gr37");
    process("gr38");
    process("gr39");
    process("gr40");
    
    document.getElementById('result').value = score;
    if (score >= 40) {
      $('.result').append('<input type="radio" name="rating" value="Proficient" checked style="display: none;">');
    } else if (score <= 39 && score >= 36) {
      $('.result').append('<input type="radio" name="rating" value="Advanced" checked style="display: none;">');
    }

    else if (score <= 35 && score >= 30) {
      $('.result').append('<input type="radio" name="rating" value="Upper Intermediate" checked style="display: none;">');
    }

    else if (score <= 29 && score >= 20) {
      $('.result').append('<input type="radio" name="rating" value="Intermediate" checked style="display: none;">');
    }

    else if (score <= 19 && score >= 10) {
      $('.result').append('<input type="radio" name="rating" value="Elementray" checked style="display: none;">');
    }

    else if (score <= 9 && score >= 0) {
      $('.result').append('<input type="radio" name="rating" value="Beginner" checked style="display: none;">');
    }

    $(".result").append('<div><p>للإطلاع على نتائج الإختبار، الرجاء زيارة مقرنا.</p></div><div><button class="btn btn-primary" name="grregister">register</button></div><br><span>4 / 4</span>');
    
    event.preventDefault();
  }
  });

// IT process & show result test
  $(".next-it-test").click(function(event){

    var form = document.getElementById("form");
    var isValidForm = form.checkValidity();
      if(isValidForm) {
          $(".result").show();
          $(".it-test").hide();

    process("it1");
    process("it2");
    process("it3");
    process("it4");
    process("it5");
    process("it6");
    process("it7");
    process("it8");
    process("it9");
    process("it10");
    process("it11");
    process("it12");
    process("it13");
    process("it14");
    process("it15");
    process("it16");
    process("it17");
    process("it18");
    process("it19");
    process("it20");
    process("it21");
    process("it22");
    process("it23");
    process("it24");
    process("it25");
    process("it26");
    process("it27");
    process("it28");
    process("it29");
    process("it30");
    process("it31");
    process("it32");
    process("it33");
    process("it34");
    process("it35");
    process("it36");
    process("it37");
    process("it38");
    process("it39");
    process("it40");
    
    document.getElementById('result').value = score;
    if (score >= 40) {
      $('.result').append('<input type="radio" name="rating" value="Proficient" checked style="display: none;">');
    } else if (score <= 39 && score >= 36) {
      $('.result').append('<input type="radio" name="rating" value="Advanced" checked style="display: none;">');
    }

    else if (score <= 35 && score >= 30) {
      $('.result').append('<input type="radio" name="rating" value="Upper Intermediate" checked style="display: none;">');
    }

    else if (score <= 29 && score >= 20) {
      $('.result').append('<input type="radio" name="rating" value="Intermediate" checked style="display: none;">');
    }

    else if (score <= 19 && score >= 10) {
      $('.result').append('<input type="radio" name="rating" value="Elementray" checked style="display: none;">');
    }

    else if (score <= 9 && score >= 0) {
      $('.result').append('<input type="radio" name="rating" value="Beginner" checked style="display: none;">');
    }

    $(".result").append('<div><p>للإطلاع على نتائج الإختبار، الرجاء زيارة مقرنا.</p></div><div><button class="btn btn-primary" name="itregister">register</button></div><br><span>4 / 4</span>');
    
    event.preventDefault();
  }
  });

// SP process & show result test
  $(".next-sp-test").click(function(event){

    var form = document.getElementById("form");
    var isValidForm = form.checkValidity();
      if(isValidForm) {
          $(".result").show();
          $(".sp-test").hide();

    process("sp1");
    process("sp2");
    process("sp3");
    process("sp4");
    process("sp5");
    process("sp6");
    process("sp7");
    process("sp8");
    process("sp9");
    process("sp10");
    process("sp11");
    process("sp12");
    process("sp13");
    process("sp14");
    process("sp15");
    process("sp16");
    process("sp17");
    process("sp18");
    process("sp19");
    process("sp20");
    process("sp21");
    process("sp22");
    process("sp23");
    process("sp24");
    process("sp25");
    process("sp26");
    process("sp27");
    process("sp28");
    process("sp29");
    process("sp30");
    process("sp31");
    process("sp32");
    process("sp33");
    process("sp34");
    process("sp35");
    process("sp36");
    process("sp37");
    process("sp38");
    process("sp39");
    process("sp40");
    
    document.getElementById('result').value = score;
    if (score >= 40) {
      $('.result').append('<input type="radio" name="rating" value="Proficient" checked style="display: none;">');
    } else if (score <= 39 && score >= 36) {
      $('.result').append('<input type="radio" name="rating" value="Advanced" checked style="display: none;">');
    }

    else if (score <= 35 && score >= 30) {
      $('.result').append('<input type="radio" name="rating" value="Upper Intermediate" checked style="display: none;">');
    }

    else if (score <= 29 && score >= 20) {
      $('.result').append('<input type="radio" name="rating" value="Intermediate" checked style="display: none;">');
    }

    else if (score <= 19 && score >= 10) {
      $('.result').append('<input type="radio" name="rating" value="Elementray" checked style="display: none;">');
    }

    else if (score <= 9 && score >= 0) {
      $('.result').append('<input type="radio" name="rating" value="Beginner" checked style="display: none;">');
    }

    $(".result").append('<div><p>للإطلاع على نتائج الإختبار، الرجاء زيارة مقرنا.</p></div><div><button class="btn btn-primary" name="spregister">register</button></div><br><span>4 / 4</span>');
    
    event.preventDefault();
  }
  });

// RU process & show result test
  $(".next-ru-test").click(function(event){

    var form = document.getElementById("form");
    var isValidForm = form.checkValidity();
      if(isValidForm) {
          $(".result").show();
          $(".ru-test").hide();

    process("ru1");
    process("ru2");
    process("ru3");
    process("ru4");
    process("ru5");
    process("ru6");
    process("ru7");
    process("ru8");
    process("ru9");
    process("ru10");
    process("ru11");
    process("ru12");
    process("ru13");
    process("ru14");
    process("ru15");
    process("ru16");
    process("ru17");
    process("ru18");
    process("ru19");
    process("ru20");
    process("ru21");
    process("ru22");
    process("ru23");
    process("ru24");
    process("ru25");
    process("ru26");
    process("ru27");
    process("ru28");
    process("ru29");
    process("ru30");
    process("ru31");
    process("ru32");
    process("ru33");
    process("ru34");
    process("ru35");
    process("ru36");
    process("ru37");
    process("ru38");
    process("ru39");
    process("ru40");
    
    document.getElementById('result').value = score;
    if (score >= 40) {
      $('.result').append('<input type="radio" name="rating" value="Proficient" checked style="display: none;">');
    } else if (score <= 39 && score >= 36) {
      $('.result').append('<input type="radio" name="rating" value="Advanced" checked style="display: none;">');
    }

    else if (score <= 35 && score >= 30) {
      $('.result').append('<input type="radio" name="rating" value="Upper Intermediate" checked style="display: none;">');
    }

    else if (score <= 29 && score >= 20) {
      $('.result').append('<input type="radio" name="rating" value="Intermediate" checked style="display: none;">');
    }

    else if (score <= 19 && score >= 10) {
      $('.result').append('<input type="radio" name="rating" value="Elementray" checked style="display: none;">');
    }

    else if (score <= 9 && score >= 0) {
      $('.result').append('<input type="radio" name="rating" value="Beginner" checked style="display: none;">');
    }

    $(".result").append('<div><p>للإطلاع على نتائج الإختبار، الرجاء زيارة مقرنا.</p></div><div><button class="btn btn-primary" name="ruregister">register</button></div><br><span>4 / 4</span>');
    
    event.preventDefault();
  }
  });
});

//Process the answers
function process(q) {
//this is for EN questions ===> q1 = id & num of EN question 
  if(q == "q1"){
    var submitted = $('input[name=q1]:checked').val();
    if (submitted == sessionStorage.a1){
      score++;
    }
  }
    
  if(q == "q2"){
    var submitted = $('input[name=q2]:checked').val();
    if (submitted == sessionStorage.a2){
      score++;
    }
  }
 
  if(q == "q3"){
    var submitted = $('input[name=q3]:checked').val();
    if (submitted == sessionStorage.a3){
      score++;
    }
  }

  if(q == "q4"){
    var submitted = $('input[name=q4]:checked').val();
    if (submitted == sessionStorage.a4){
      score++;
    }
  }

  if(q == "q5"){
    var submitted = $('input[name=q5]:checked').val();
    if (submitted == sessionStorage.a5){
      score++;
    }
  }

  if(q == "q6"){
    var submitted = $('input[name=q6]:checked').val();
    if (submitted == sessionStorage.a6){
      score++;
    }
  }

  if(q == "q7"){
    var submitted = $('input[name=q7]:checked').val();
    if (submitted == sessionStorage.a7){
      score++;
    }
  }

  if(q == "q8"){
    var submitted = $('input[name=q8]:checked').val();
    if (submitted == sessionStorage.a8){
      score++;
    }
  }

  if(q == "q9"){
    var submitted = $('input[name=q9]:checked').val();
    if (submitted == sessionStorage.a9){
      score++;
    }
  }          

  if(q == "q10"){
    var submitted = $('input[name=q10]:checked').val();
    if (submitted == sessionStorage.a10){
      score++;
    }
  }

  if(q == "q11"){
    var submitted = $('input[name=q11]:checked').val();
    if (submitted == sessionStorage.a11){
      score++;
    }
  }
    
  if(q == "q12"){
    var submitted = $('input[name=q12]:checked').val();
    if (submitted == sessionStorage.a12){
      score++;
    }
  }
 
  if(q == "q13"){
    var submitted = $('input[name=q13]:checked').val();
    if (submitted == sessionStorage.a13){
      score++;
    }
  }

  if(q == "q14"){
    var submitted = $('input[name=q14]:checked').val();
    if (submitted == sessionStorage.a14){
      score++;
    }
  }

  if(q == "q15"){
    var submitted = $('input[name=q15]:checked').val();
    if (submitted == sessionStorage.a15){
      score++;
    }
  }

  if(q == "q16"){
    var submitted = $('input[name=q16]:checked').val();
    if (submitted == sessionStorage.a16){
      score++;
    }
  }

  if(q == "q17"){
    var submitted = $('input[name=q17]:checked').val();
    if (submitted == sessionStorage.a17){
      score++;
    }
  }

  if(q == "q18"){
    var submitted = $('input[name=q18]:checked').val();
    if (submitted == sessionStorage.a18){
      score++;
    }
  }

  if(q == "q19"){
    var submitted = $('input[name=q19]:checked').val();
    if (submitted == sessionStorage.a19){
      score++;
    }
  }          

  if(q == "q20"){
    var submitted = $('input[name=q20]:checked').val();
    if (submitted == sessionStorage.a20){
      score++;
    }
  }

  if(q == "q21"){
    var submitted = $('input[name=q21]:checked').val();
    if (submitted == sessionStorage.a21){
      score++;
    }
  }
    
  if(q == "q22"){
    var submitted = $('input[name=q22]:checked').val();
    if (submitted == sessionStorage.a22){
      score++;
    }
  }
 
  if(q == "q23"){
    var submitted = $('input[name=q23]:checked').val();
    if (submitted == sessionStorage.a23){
      score++;
    }
  }

  if(q == "q24"){
    var submitted = $('input[name=q24]:checked').val();
    if (submitted == sessionStorage.a24){
      score++;
    }
  }

  if(q == "q25"){
    var submitted = $('input[name=q25]:checked').val();
    if (submitted == sessionStorage.a25){
      score++;
    }
  }

  if(q == "q26"){
    var submitted = $('input[name=q26]:checked').val();
    if (submitted == sessionStorage.a26){
      score++;
    }
  }

  if(q == "q27"){
    var submitted = $('input[name=q27]:checked').val();
    if (submitted == sessionStorage.a27){
      score++;
    }
  }

  if(q == "q28"){
    var submitted = $('input[name=q28]:checked').val();
    if (submitted == sessionStorage.a28){
      score++;
    }
  }

  if(q == "q29"){
    var submitted = $('input[name=q29]:checked').val();
    if (submitted == sessionStorage.a29){
      score++;
    }
  }          

  if(q == "q30"){
    var submitted = $('input[name=q30]:checked').val();
    if (submitted == sessionStorage.a30){
      score++;
    }
  }

  if(q == "q31"){
    var submitted = $('input[name=q31]:checked').val();
    if (submitted == sessionStorage.a31){
      score++;
    }
  }
    
  if(q == "q32"){
    var submitted = $('input[name=q32]:checked').val();
    if (submitted == sessionStorage.a32){
      score++;
    }
  }
 
  if(q == "q33"){
    var submitted = $('input[name=q33]:checked').val();
    if (submitted == sessionStorage.a33){
      score++;
    }
  }

  if(q == "q34"){
    var submitted = $('input[name=q34]:checked').val();
    if (submitted == sessionStorage.a34){
      score++;
    }
  }

  if(q == "q35"){
    var submitted = $('input[name=q35]:checked').val();
    if (submitted == sessionStorage.a35){
      score++;
    }
  }

  if(q == "q36"){
    var submitted = $('input[name=q36]:checked').val();
    if (submitted == sessionStorage.a36){
      score++;
    }
  }

  if(q == "q37"){
    var submitted = $('input[name=q37]:checked').val();
    if (submitted == sessionStorage.a37){
      score++;
    }
  }

  if(q == "q38"){
    var submitted = $('input[name=q38]:checked').val();
    if (submitted == sessionStorage.a38){
      score++;
    }
  }

  if(q == "q39"){
    var submitted = $('input[name=q39]:checked').val();
    if (submitted == sessionStorage.a39){
      score++;
    }
  }          

  if(q == "q40"){
    var submitted = $('input[name=q40]:checked').val();
    if (submitted == sessionStorage.a40){
      score++;
    }
  }
//this is for FR questions ===> fr1 = id & num of FR question

    if(q == "fr1"){
        var submitted = $('input[name=fr1]:checked').val();
        if (submitted == sessionStorage.fra1){
            score++;
        }
    }

    if(q == "fr2"){
        var submitted = $('input[name=fr2]:checked').val();
        if (submitted == sessionStorage.fra2){
            score++;
        }
    }

    if(q == "fr3"){
        var submitted = $('input[name=fr3]:checked').val();
        if (submitted == sessionStorage.fra3){
            score++;
        }
    }

    if(q == "fr4"){
        var submitted = $('input[name=fr4]:checked').val();
        if (submitted == sessionStorage.fra4){
            score++;
        }
    }

    if(q == "fr5"){
        var submitted = $('input[name=fr5]:checked').val();
        if (submitted == sessionStorage.fra5){
            score++;
        }
    }

    if(q == "fr6"){
        var submitted = $('input[name=fr6]:checked').val();
        if (submitted == sessionStorage.fra6){
            score++;
        }
    }
    if(q == "fr7"){
        var submitted = $('input[name=fr7]:checked').val();
        if (submitted == sessionStorage.fra7){
            score++;
        }
    }

    if(q == "fr8"){
        var submitted = $('input[name=fr8]:checked').val();
        if (submitted == sessionStorage.fra8){
            score++;
        }
    }

    if(q == "fr9"){
        var submitted = $('input[name=fr9]:checked').val();
        if (submitted == sessionStorage.fra9){
            score++;
        }
    }

    if(q == "fr10"){
        var submitted = $('input[name=fr10]:checked').val();
        if (submitted == sessionStorage.fra10){
            score++;
        }
    }
    if(q == "fr11"){
    var submitted = $('input[name=fr11]:checked').val();
      if (submitted == sessionStorage.fra11){
        score++;
      }
    }
    
    if(q == "fr12"){
      var submitted = $('input[name=fr12]:checked').val();
      if (submitted == sessionStorage.fra12){
        score++;
      }
    }
   
    if(q == "fr13"){
      var submitted = $('input[name=fr13]:checked').val();
      if (submitted == sessionStorage.fra13){
        score++;
      }
    }

    if(q == "fr14"){
      var submitted = $('input[name=fr14]:checked').val();
      if (submitted == sessionStorage.fra14){
        score++;
      }
    }

    if(q == "fr15"){
      var submitted = $('input[name=fr15]:checked').val();
      if (submitted == sessionStorage.fra15){
        score++;
      }
    }

    if(q == "fr16"){
      var submitted = $('input[name=fr16]:checked').val();
      if (submitted == sessionStorage.fra16){
        score++;
      }
    }

    if(q == "fr17"){
      var submitted = $('input[name=fr17]:checked').val();
      if (submitted == sessionStorage.fra17){
        score++;
      }
    }

    if(q == "fr18"){
      var submitted = $('input[name=fr18]:checked').val();
      if (submitted == sessionStorage.fra18){
        score++;
      }
    }

    if(q == "fr19"){
      var submitted = $('input[name=fr19]:checked').val();
      if (submitted == sessionStorage.fra19){
        score++;
      }
    }          

    if(q == "fr20"){
      var submitted = $('input[name=fr20]:checked').val();
      if (submitted == sessionStorage.fra20){
        score++;
      }
    }

    if(q == "fr21"){
      var submitted = $('input[name=fr21]:checked').val();
      if (submitted == sessionStorage.fra21){
        score++;
      }
    }
      
    if(q == "fr22"){
      var submitted = $('input[name=fr22]:checked').val();
      if (submitted == sessionStorage.fra22){
        score++;
      }
    }
   
    if(q == "fr23"){
      var submitted = $('input[name=fr23]:checked').val();
      if (submitted == sessionStorage.fra23){
        score++;
      }
    }

    if(q == "fr24"){
      var submitted = $('input[name=fr24]:checked').val();
      if (submitted == sessionStorage.fra24){
        score++;
      }
    }

    if(q == "fr25"){
      var submitted = $('input[name=fr25]:checked').val();
      if (submitted == sessionStorage.fra25){
        score++;
      }
    }

    if(q == "fr26"){
      var submitted = $('input[name=fr26]:checked').val();
      if (submitted == sessionStorage.fra26){
        score++;
      }
    }

    if(q == "fr27"){
      var submitted = $('input[name=fr27]:checked').val();
      if (submitted == sessionStorage.fra27){
        score++;
      }
    }

    if(q == "fr28"){
      var submitted = $('input[name=fr28]:checked').val();
      if (submitted == sessionStorage.fra28){
        score++;
      }
    }

    if(q == "fr29"){
      var submitted = $('input[name=fr29]:checked').val();
      if (submitted == sessionStorage.fra29){
        score++;
      }
    }          

    if(q == "fr30"){
      var submitted = $('input[name=fr30]:checked').val();
      if (submitted == sessionStorage.fra30){
        score++;
      }
    }

    if(q == "fr31"){
      var submitted = $('input[name=fr31]:checked').val();
      if (submitted == sessionStorage.fra31){
        score++;
      }
    }
      
    if(q == "fr32"){
      var submitted = $('input[name=fr32]:checked').val();
      if (submitted == sessionStorage.fra32){
        score++;
      }
    }
   
    if(q == "fr33"){
      var submitted = $('input[name=fr33]:checked').val();
      if (submitted == sessionStorage.fra33){
        score++;
      }
    }

    if(q == "fr34"){
      var submitted = $('input[name=fr34]:checked').val();
      if (submitted == sessionStorage.fra34){
        score++;
      }
    }

    if(q == "fr35"){
      var submitted = $('input[name=fr35]:checked').val();
      if (submitted == sessionStorage.fra35){
        score++;
      }
    }

    if(q == "fr36"){
      var submitted = $('input[name=fr36]:checked').val();
      if (submitted == sessionStorage.fra36){
        score++;
      }
    }

    if(q == "fr37"){
      var submitted = $('input[name=fr37]:checked').val();
      if (submitted == sessionStorage.fra37){
        score++;
      }
    }

    if(q == "fr38"){
      var submitted = $('input[name=fr38]:checked').val();
      if (submitted == sessionStorage.fra38){
        score++;
      }
    }

    if(q == "fr39"){
      var submitted = $('input[name=fr39]:checked').val();
      if (submitted == sessionStorage.fra39){
        score++;
      }
    }          

    if(q == "fr40"){
      var submitted = $('input[name=fr40]:checked').val();
      if (submitted == sessionStorage.fra40){
        score++;
      }
    }
//this is for TR questions ===> tr1 = id & num of TR question

    if(q == "tr1"){
        var submitted = $('input[name=tr1]:checked').val();
        if (submitted == sessionStorage.tra1){
            score++;
        }
    }

    if(q == "tr2"){
        var submitted = $('input[name=tr2]:checked').val();
        if (submitted == sessionStorage.tra2){
            score++;
        }
    }

    if(q == "tr3"){
        var submitted = $('input[name=tr3]:checked').val();
        if (submitted == sessionStorage.tra3){
            score++;
        }
    }

    if(q == "tr4"){
        var submitted = $('input[name=tr4]:checked').val();
        if (submitted == sessionStorage.tra4){
            score++;
        }
    }

    if(q == "tr5"){
        var submitted = $('input[name=tr5]:checked').val();
        if (submitted == sessionStorage.tra5){
            score++;
        }
    }

    if(q == "tr6"){
        var submitted = $('input[name=tr6]:checked').val();
        if (submitted == sessionStorage.tra6){
            score++;
        }
    }
    if(q == "tr7"){
        var submitted = $('input[name=tr7]:checked').val();
        if (submitted == sessionStorage.tra7){
            score++;
        }
    }

    if(q == "tr8"){
        var submitted = $('input[name=tr8]:checked').val();
        if (submitted == sessionStorage.tra8){
            score++;
        }
    }

    if(q == "tr9"){
        var submitted = $('input[name=tr9]:checked').val();
        if (submitted == sessionStorage.tra9){
            score++;
        }
    }

    if(q == "tr10"){
        var submitted = $('input[name=tr10]:checked').val();
        if (submitted == sessionStorage.tra10){
            score++;
        }
    }
    if(q == "tr11"){
    var submitted = $('input[name=tr11]:checked').val();
      if (submitted == sessionStorage.tra11){
        score++;
      }
    }
    
    if(q == "tr12"){
      var submitted = $('input[name=tr12]:checked').val();
      if (submitted == sessionStorage.tra12){
        score++;
      }
    }
   
    if(q == "tr13"){
      var submitted = $('input[name=tr13]:checked').val();
      if (submitted == sessionStorage.tra13){
        score++;
      }
    }

    if(q == "tr14"){
      var submitted = $('input[name=tr14]:checked').val();
      if (submitted == sessionStorage.tra14){
        score++;
      }
    }

    if(q == "tr15"){
      var submitted = $('input[name=tr15]:checked').val();
      if (submitted == sessionStorage.tra15){
        score++;
      }
    }

    if(q == "tr16"){
      var submitted = $('input[name=tr16]:checked').val();
      if (submitted == sessionStorage.tra16){
        score++;
      }
    }

    if(q == "tr17"){
      var submitted = $('input[name=tr17]:checked').val();
      if (submitted == sessionStorage.tra17){
        score++;
      }
    }

    if(q == "tr18"){
      var submitted = $('input[name=tr18]:checked').val();
      if (submitted == sessionStorage.tra18){
        score++;
      }
    }

    if(q == "tr19"){
      var submitted = $('input[name=tr19]:checked').val();
      if (submitted == sessionStorage.tra19){
        score++;
      }
    }          

    if(q == "tr20"){
      var submitted = $('input[name=tr20]:checked').val();
      if (submitted == sessionStorage.tra20){
        score++;
      }
    }

    if(q == "tr21"){
      var submitted = $('input[name=tr21]:checked').val();
      if (submitted == sessionStorage.tra21){
        score++;
      }
    }
      
    if(q == "tr22"){
      var submitted = $('input[name=tr22]:checked').val();
      if (submitted == sessionStorage.tra22){
        score++;
      }
    }
   
    if(q == "tr23"){
      var submitted = $('input[name=tr23]:checked').val();
      if (submitted == sessionStorage.tra23){
        score++;
      }
    }

    if(q == "tr24"){
      var submitted = $('input[name=tr24]:checked').val();
      if (submitted == sessionStorage.tra24){
        score++;
      }
    }

    if(q == "tr25"){
      var submitted = $('input[name=tr25]:checked').val();
      if (submitted == sessionStorage.tra25){
        score++;
      }
    }

    if(q == "tr26"){
      var submitted = $('input[name=tr26]:checked').val();
      if (submitted == sessionStorage.tra26){
        score++;
      }
    }

    if(q == "tr27"){
      var submitted = $('input[name=tr27]:checked').val();
      if (submitted == sessionStorage.tra27){
        score++;
      }
    }

    if(q == "tr28"){
      var submitted = $('input[name=tr28]:checked').val();
      if (submitted == sessionStorage.tra28){
        score++;
      }
    }

    if(q == "tr29"){
      var submitted = $('input[name=tr29]:checked').val();
      if (submitted == sessionStorage.tra29){
        score++;
      }
    }          

    if(q == "tr30"){
      var submitted = $('input[name=tr30]:checked').val();
      if (submitted == sessionStorage.tra30){
        score++;
      }
    }

    if(q == "tr31"){
      var submitted = $('input[name=tr31]:checked').val();
      if (submitted == sessionStorage.tra31){
        score++;
      }
    }
      
    if(q == "tr32"){
      var submitted = $('input[name=tr32]:checked').val();
      if (submitted == sessionStorage.tra32){
        score++;
      }
    }
   
    if(q == "tr33"){
      var submitted = $('input[name=tr33]:checked').val();
      if (submitted == sessionStorage.tra33){
        score++;
      }
    }

    if(q == "tr34"){
      var submitted = $('input[name=tr34]:checked').val();
      if (submitted == sessionStorage.tra34){
        score++;
      }
    }

    if(q == "tr35"){
      var submitted = $('input[name=tr35]:checked').val();
      if (submitted == sessionStorage.tra35){
        score++;
      }
    }

    if(q == "tr36"){
      var submitted = $('input[name=tr36]:checked').val();
      if (submitted == sessionStorage.tra36){
        score++;
      }
    }

    if(q == "tr37"){
      var submitted = $('input[name=tr37]:checked').val();
      if (submitted == sessionStorage.tra37){
        score++;
      }
    }

    if(q == "tr38"){
      var submitted = $('input[name=tr38]:checked').val();
      if (submitted == sessionStorage.tra38){
        score++;
      }
    }

    if(q == "tr39"){
      var submitted = $('input[name=tr39]:checked').val();
      if (submitted == sessionStorage.tra39){
        score++;
      }
    }          

    if(q == "tr40"){
      var submitted = $('input[name=tr40]:checked').val();
      if (submitted == sessionStorage.tra40){
        score++;
      }
    }
//this is for GER questions ===> gr1 = id & num of GER question

    if(q == "gr1"){
        var submitted = $('input[name=gr1]:checked').val();
        if (submitted == sessionStorage.gra1){
            score++;
        }
    }

    if(q == "gr2"){
        var submitted = $('input[name=gr2]:checked').val();
        if (submitted == sessionStorage.gra2){
            score++;
        }
    }

    if(q == "gr3"){
        var submitted = $('input[name=gr3]:checked').val();
        if (submitted == sessionStorage.gra3){
            score++;
        }
    }

    if(q == "gr4"){
        var submitted = $('input[name=gr4]:checked').val();
        if (submitted == sessionStorage.gra4){
            score++;
        }
    }

    if(q == "gr5"){
        var submitted = $('input[name=gr5]:checked').val();
        if (submitted == sessionStorage.gra5){
            score++;
        }
    }

    if(q == "gr6"){
        var submitted = $('input[name=gr6]:checked').val();
        if (submitted == sessionStorage.gra6){
            score++;
        }
    }
    if(q == "gr7"){
        var submitted = $('input[name=gr7]:checked').val();
        if (submitted == sessionStorage.gra7){
            score++;
        }
    }

    if(q == "gr8"){
        var submitted = $('input[name=gr8]:checked').val();
        if (submitted == sessionStorage.gra8){
            score++;
        }
    }

    if(q == "gr9"){
        var submitted = $('input[name=gr9]:checked').val();
        if (submitted == sessionStorage.gra9){
            score++;
        }
    }

    if(q == "gr10"){
        var submitted = $('input[name=gr10]:checked').val();
        if (submitted == sessionStorage.gra10){
            score++;
        }
    }
    if(q == "gr11"){
    var submitted = $('input[name=gr11]:checked').val();
      if (submitted == sessionStorage.gra11){
        score++;
      }
    }
    
    if(q == "gr12"){
      var submitted = $('input[name=gr12]:checked').val();
      if (submitted == sessionStorage.gra12){
        score++;
      }
    }
   
    if(q == "gr13"){
      var submitted = $('input[name=gr13]:checked').val();
      if (submitted == sessionStorage.gra13){
        score++;
      }
    }

    if(q == "gr14"){
      var submitted = $('input[name=gr14]:checked').val();
      if (submitted == sessionStorage.gra14){
        score++;
      }
    }

    if(q == "gr15"){
      var submitted = $('input[name=gr15]:checked').val();
      if (submitted == sessionStorage.gra15){
        score++;
      }
    }

    if(q == "gr16"){
      var submitted = $('input[name=gr16]:checked').val();
      if (submitted == sessionStorage.gra16){
        score++;
      }
    }

    if(q == "gr17"){
      var submitted = $('input[name=gr17]:checked').val();
      if (submitted == sessionStorage.gra17){
        score++;
      }
    }

    if(q == "gr18"){
      var submitted = $('input[name=gr18]:checked').val();
      if (submitted == sessionStorage.gra18){
        score++;
      }
    }

    if(q == "gr19"){
      var submitted = $('input[name=gr19]:checked').val();
      if (submitted == sessionStorage.gra19){
        score++;
      }
    }          

    if(q == "gr20"){
      var submitted = $('input[name=gr20]:checked').val();
      if (submitted == sessionStorage.gra20){
        score++;
      }
    }

    if(q == "gr21"){
      var submitted = $('input[name=gr21]:checked').val();
      if (submitted == sessionStorage.gra21){
        score++;
      }
    }
      
    if(q == "gr22"){
      var submitted = $('input[name=gr22]:checked').val();
      if (submitted == sessionStorage.gra22){
        score++;
      }
    }
   
    if(q == "gr23"){
      var submitted = $('input[name=gr23]:checked').val();
      if (submitted == sessionStorage.gra23){
        score++;
      }
    }

    if(q == "gr24"){
      var submitted = $('input[name=gr24]:checked').val();
      if (submitted == sessionStorage.gra24){
        score++;
      }
    }

    if(q == "gr25"){
      var submitted = $('input[name=gr25]:checked').val();
      if (submitted == sessionStorage.gra25){
        score++;
      }
    }

    if(q == "gr26"){
      var submitted = $('input[name=gr26]:checked').val();
      if (submitted == sessionStorage.gra26){
        score++;
      }
    }

    if(q == "gr27"){
      var submitted = $('input[name=gr27]:checked').val();
      if (submitted == sessionStorage.gra27){
        score++;
      }
    }

    if(q == "gr28"){
      var submitted = $('input[name=gr28]:checked').val();
      if (submitted == sessionStorage.gra28){
        score++;
      }
    }

    if(q == "gr29"){
      var submitted = $('input[name=gr29]:checked').val();
      if (submitted == sessionStorage.gra29){
        score++;
      }
    }          

    if(q == "gr30"){
      var submitted = $('input[name=gr30]:checked').val();
      if (submitted == sessionStorage.gra30){
        score++;
      }
    }

    if(q == "gr31"){
      var submitted = $('input[name=gr31]:checked').val();
      if (submitted == sessionStorage.gra31){
        score++;
      }
    }
      
    if(q == "gr32"){
      var submitted = $('input[name=gr32]:checked').val();
      if (submitted == sessionStorage.gra32){
        score++;
      }
    }
   
    if(q == "gr33"){
      var submitted = $('input[name=gr33]:checked').val();
      if (submitted == sessionStorage.gra33){
        score++;
      }
    }

    if(q == "gr34"){
      var submitted = $('input[name=gr34]:checked').val();
      if (submitted == sessionStorage.gra34){
        score++;
      }
    }

    if(q == "gr35"){
      var submitted = $('input[name=gr35]:checked').val();
      if (submitted == sessionStorage.gra35){
        score++;
      }
    }

    if(q == "gr36"){
      var submitted = $('input[name=gr36]:checked').val();
      if (submitted == sessionStorage.gra36){
        score++;
      }
    }

    if(q == "gr37"){
      var submitted = $('input[name=gr37]:checked').val();
      if (submitted == sessionStorage.gra37){
        score++;
      }
    }

    if(q == "gr38"){
      var submitted = $('input[name=gr38]:checked').val();
      if (submitted == sessionStorage.gra38){
        score++;
      }
    }

    if(q == "gr39"){
      var submitted = $('input[name=gr39]:checked').val();
      if (submitted == sessionStorage.gra39){
        score++;
      }
    }          

    if(q == "gr40"){
      var submitted = $('input[name=gr40]:checked').val();
      if (submitted == sessionStorage.gra40){
        score++;
      }
    }
//this is for ITA questions ===> it1 = id & num of ITA question

    if(q == "it1"){
        var submitted = $('input[name=it1]:checked').val();
        if (submitted == sessionStorage.ita1){
            score++;
        }
    }

    if(q == "it2"){
        var submitted = $('input[name=it2]:checked').val();
        if (submitted == sessionStorage.ita2){
            score++;
        }
    }

    if(q == "it3"){
        var submitted = $('input[name=it3]:checked').val();
        if (submitted == sessionStorage.ita3){
            score++;
        }
    }

    if(q == "it4"){
        var submitted = $('input[name=it4]:checked').val();
        if (submitted == sessionStorage.ita4){
            score++;
        }
    }

    if(q == "it5"){
        var submitted = $('input[name=it5]:checked').val();
        if (submitted == sessionStorage.ita5){
            score++;
        }
    }

    if(q == "it6"){
        var submitted = $('input[name=it6]:checked').val();
        if (submitted == sessionStorage.ita6){
            score++;
        }
    }
    if(q == "it7"){
        var submitted = $('input[name=it7]:checked').val();
        if (submitted == sessionStorage.ita7){
            score++;
        }
    }

    if(q == "it8"){
        var submitted = $('input[name=it8]:checked').val();
        if (submitted == sessionStorage.ita8){
            score++;
        }
    }

    if(q == "it9"){
        var submitted = $('input[name=it9]:checked').val();
        if (submitted == sessionStorage.ita9){
            score++;
        }
    }

    if(q == "it10"){
        var submitted = $('input[name=it10]:checked').val();
        if (submitted == sessionStorage.ita10){
            score++;
        }
    }
    if(q == "it11"){
    var submitted = $('input[name=it11]:checked').val();
      if (submitted == sessionStorage.ita11){
        score++;
      }
    }
    
    if(q == "it12"){
      var submitted = $('input[name=it12]:checked').val();
      if (submitted == sessionStorage.ita12){
        score++;
      }
    }
   
    if(q == "it13"){
      var submitted = $('input[name=it13]:checked').val();
      if (submitted == sessionStorage.ita13){
        score++;
      }
    }

    if(q == "it14"){
      var submitted = $('input[name=it14]:checked').val();
      if (submitted == sessionStorage.ita14){
        score++;
      }
    }

    if(q == "it15"){
      var submitted = $('input[name=it15]:checked').val();
      if (submitted == sessionStorage.ita15){
        score++;
      }
    }

    if(q == "it16"){
      var submitted = $('input[name=it16]:checked').val();
      if (submitted == sessionStorage.ita16){
        score++;
      }
    }

    if(q == "it17"){
      var submitted = $('input[name=it17]:checked').val();
      if (submitted == sessionStorage.ita17){
        score++;
      }
    }

    if(q == "it18"){
      var submitted = $('input[name=it18]:checked').val();
      if (submitted == sessionStorage.ita18){
        score++;
      }
    }

    if(q == "it19"){
      var submitted = $('input[name=it19]:checked').val();
      if (submitted == sessionStorage.ita19){
        score++;
      }
    }          

    if(q == "it20"){
      var submitted = $('input[name=it20]:checked').val();
      if (submitted == sessionStorage.ita20){
        score++;
      }
    }

    if(q == "it21"){
      var submitted = $('input[name=it21]:checked').val();
      if (submitted == sessionStorage.ita21){
        score++;
      }
    }
      
    if(q == "it22"){
      var submitted = $('input[name=it22]:checked').val();
      if (submitted == sessionStorage.ita22){
        score++;
      }
    }
   
    if(q == "it23"){
      var submitted = $('input[name=it23]:checked').val();
      if (submitted == sessionStorage.ita23){
        score++;
      }
    }

    if(q == "it24"){
      var submitted = $('input[name=it24]:checked').val();
      if (submitted == sessionStorage.ita24){
        score++;
      }
    }

    if(q == "it25"){
      var submitted = $('input[name=it25]:checked').val();
      if (submitted == sessionStorage.ita25){
        score++;
      }
    }

    if(q == "it26"){
      var submitted = $('input[name=it26]:checked').val();
      if (submitted == sessionStorage.ita26){
        score++;
      }
    }

    if(q == "it27"){
      var submitted = $('input[name=it27]:checked').val();
      if (submitted == sessionStorage.ita27){
        score++;
      }
    }

    if(q == "it28"){
      var submitted = $('input[name=it28]:checked').val();
      if (submitted == sessionStorage.ita28){
        score++;
      }
    }

    if(q == "it29"){
      var submitted = $('input[name=it29]:checked').val();
      if (submitted == sessionStorage.ita29){
        score++;
      }
    }          

    if(q == "it30"){
      var submitted = $('input[name=it30]:checked').val();
      if (submitted == sessionStorage.ita30){
        score++;
      }
    }

    if(q == "it31"){
      var submitted = $('input[name=it31]:checked').val();
      if (submitted == sessionStorage.ita31){
        score++;
      }
    }
      
    if(q == "it32"){
      var submitted = $('input[name=it32]:checked').val();
      if (submitted == sessionStorage.ita32){
        score++;
      }
    }
   
    if(q == "it33"){
      var submitted = $('input[name=it33]:checked').val();
      if (submitted == sessionStorage.ita33){
        score++;
      }
    }

    if(q == "it34"){
      var submitted = $('input[name=it34]:checked').val();
      if (submitted == sessionStorage.ita34){
        score++;
      }
    }

    if(q == "it35"){
      var submitted = $('input[name=it35]:checked').val();
      if (submitted == sessionStorage.ita35){
        score++;
      }
    }

    if(q == "it36"){
      var submitted = $('input[name=it36]:checked').val();
      if (submitted == sessionStorage.ita36){
        score++;
      }
    }

    if(q == "it37"){
      var submitted = $('input[name=it37]:checked').val();
      if (submitted == sessionStorage.ita37){
        score++;
      }
    }

    if(q == "it38"){
      var submitted = $('input[name=it38]:checked').val();
      if (submitted == sessionStorage.ita38){
        score++;
      }
    }

    if(q == "it39"){
      var submitted = $('input[name=it39]:checked').val();
      if (submitted == sessionStorage.ita39){
        score++;
      }
    }          

    if(q == "it40"){
      var submitted = $('input[name=it40]:checked').val();
      if (submitted == sessionStorage.ita40){
        score++;
      }
    }
//this is for SPA questions ===> sp1 = id & num of SPA question

  if(q == "sp1"){
      var submitted = $('input[name=sp1]:checked').val();
      if (submitted == sessionStorage.spa1){
          score++;
      }
  }

  if(q == "sp2"){
      var submitted = $('input[name=sp2]:checked').val();
      if (submitted == sessionStorage.spa2){
          score++;
      }
  }

  if(q == "sp3"){
      var submitted = $('input[name=sp3]:checked').val();
      if (submitted == sessionStorage.spa3){
          score++;
      }
  }

  if(q == "sp4"){
      var submitted = $('input[name=sp4]:checked').val();
      if (submitted == sessionStorage.spa4){
          score++;
      }
  }

  if(q == "sp5"){
      var submitted = $('input[name=sp5]:checked').val();
      if (submitted == sessionStorage.spa5){
          score++;
      }
  }

  if(q == "sp6"){
      var submitted = $('input[name=sp6]:checked').val();
      if (submitted == sessionStorage.spa6){
          score++;
      }
  }
  if(q == "sp7"){
      var submitted = $('input[name=sp7]:checked').val();
      if (submitted == sessionStorage.spa7){
          score++;
      }
  }

  if(q == "sp8"){
      var submitted = $('input[name=sp8]:checked').val();
      if (submitted == sessionStorage.spa8){
          score++;
      }
  }

  if(q == "sp9"){
      var submitted = $('input[name=sp9]:checked').val();
      if (submitted == sessionStorage.spa9){
          score++;
      }
  }

  if(q == "sp10"){
      var submitted = $('input[name=sp10]:checked').val();
      if (submitted == sessionStorage.spa10){
          score++;
      }
  }
  if(q == "sp11"){
  var submitted = $('input[name=sp11]:checked').val();
    if (submitted == sessionStorage.spa11){
      score++;
    }
  }
  
  if(q == "sp12"){
    var submitted = $('input[name=sp12]:checked').val();
    if (submitted == sessionStorage.spa12){
      score++;
    }
  }
 
  if(q == "sp13"){
    var submitted = $('input[name=sp13]:checked').val();
    if (submitted == sessionStorage.spa13){
      score++;
    }
  }

  if(q == "sp14"){
    var submitted = $('input[name=sp14]:checked').val();
    if (submitted == sessionStorage.spa14){
      score++;
    }
  }

  if(q == "sp15"){
    var submitted = $('input[name=sp15]:checked').val();
    if (submitted == sessionStorage.spa15){
      score++;
    }
  }

  if(q == "sp16"){
    var submitted = $('input[name=sp16]:checked').val();
    if (submitted == sessionStorage.spa16){
      score++;
    }
  }

  if(q == "sp17"){
    var submitted = $('input[name=sp17]:checked').val();
    if (submitted == sessionStorage.spa17){
      score++;
    }
  }

  if(q == "sp18"){
    var submitted = $('input[name=sp18]:checked').val();
    if (submitted == sessionStorage.spa18){
      score++;
    }
  }

  if(q == "sp19"){
    var submitted = $('input[name=sp19]:checked').val();
    if (submitted == sessionStorage.spa19){
      score++;
    }
  }          

  if(q == "sp20"){
    var submitted = $('input[name=sp20]:checked').val();
    if (submitted == sessionStorage.spa20){
      score++;
    }
  }

  if(q == "sp21"){
    var submitted = $('input[name=sp21]:checked').val();
    if (submitted == sessionStorage.spa21){
      score++;
    }
  }
    
  if(q == "sp22"){
    var submitted = $('input[name=sp22]:checked').val();
    if (submitted == sessionStorage.spa22){
      score++;
    }
  }
 
  if(q == "sp23"){
    var submitted = $('input[name=sp23]:checked').val();
    if (submitted == sessionStorage.spa23){
      score++;
    }
  }

  if(q == "sp24"){
    var submitted = $('input[name=sp24]:checked').val();
    if (submitted == sessionStorage.spa24){
      score++;
    }
  }

  if(q == "sp25"){
    var submitted = $('input[name=sp25]:checked').val();
    if (submitted == sessionStorage.spa25){
      score++;
    }
  }

  if(q == "sp26"){
    var submitted = $('input[name=sp26]:checked').val();
    if (submitted == sessionStorage.spa26){
      score++;
    }
  }

  if(q == "sp27"){
    var submitted = $('input[name=sp27]:checked').val();
    if (submitted == sessionStorage.spa27){
      score++;
    }
  }

  if(q == "sp28"){
    var submitted = $('input[name=sp28]:checked').val();
    if (submitted == sessionStorage.spa28){
      score++;
    }
  }

  if(q == "sp29"){
    var submitted = $('input[name=sp29]:checked').val();
    if (submitted == sessionStorage.spa29){
      score++;
    }
  }          

  if(q == "sp30"){
    var submitted = $('input[name=sp30]:checked').val();
    if (submitted == sessionStorage.spa30){
      score++;
    }
  }

  if(q == "sp31"){
    var submitted = $('input[name=sp31]:checked').val();
    if (submitted == sessionStorage.spa31){
      score++;
    }
  }
    
  if(q == "sp32"){
    var submitted = $('input[name=sp32]:checked').val();
    if (submitted == sessionStorage.spa32){
      score++;
    }
  }
 
  if(q == "sp33"){
    var submitted = $('input[name=sp33]:checked').val();
    if (submitted == sessionStorage.spa33){
      score++;
    }
  }

  if(q == "sp34"){
    var submitted = $('input[name=sp34]:checked').val();
    if (submitted == sessionStorage.spa34){
      score++;
    }
  }

  if(q == "sp35"){
    var submitted = $('input[name=sp35]:checked').val();
    if (submitted == sessionStorage.spa35){
      score++;
    }
  }

  if(q == "sp36"){
    var submitted = $('input[name=sp36]:checked').val();
    if (submitted == sessionStorage.spa36){
      score++;
    }
  }

  if(q == "sp37"){
    var submitted = $('input[name=sp37]:checked').val();
    if (submitted == sessionStorage.spa37){
      score++;
    }
  }

  if(q == "sp38"){
    var submitted = $('input[name=sp38]:checked').val();
    if (submitted == sessionStorage.spa38){
      score++;
    }
  }

  if(q == "sp39"){
    var submitted = $('input[name=sp39]:checked').val();
    if (submitted == sessionStorage.spa39){
      score++;
    }
  }          

  if(q == "sp40"){
    var submitted = $('input[name=sp40]:checked').val();
    if (submitted == sessionStorage.spa40){
      score++;
    }
  }
//this is for RU questions ===> ru1 = id & num of RU question

    if(q == "ru1"){
        var submitted = $('input[name=ru1]:checked').val();
        if (submitted == sessionStorage.rua1){
            score++;
        }
    }

    if(q == "ru2"){
        var submitted = $('input[name=ru2]:checked').val();
        if (submitted == sessionStorage.rua2){
            score++;
        }
    }

    if(q == "ru3"){
        var submitted = $('input[name=ru3]:checked').val();
        if (submitted == sessionStorage.rua3){
            score++;
        }
    }

    if(q == "ru4"){
        var submitted = $('input[name=ru4]:checked').val();
        if (submitted == sessionStorage.rua4){
            score++;
        }
    }

    if(q == "ru5"){
        var submitted = $('input[name=ru5]:checked').val();
        if (submitted == sessionStorage.rua5){
            score++;
        }
    }

    if(q == "ru6"){
        var submitted = $('input[name=ru6]:checked').val();
        if (submitted == sessionStorage.rua6){
            score++;
        }
    }
    if(q == "ru7"){
        var submitted = $('input[name=ru7]:checked').val();
        if (submitted == sessionStorage.rua7){
            score++;
        }
    }

    if(q == "ru8"){
        var submitted = $('input[name=ru8]:checked').val();
        if (submitted == sessionStorage.rua8){
            score++;
        }
    }

    if(q == "ru9"){
        var submitted = $('input[name=ru9]:checked').val();
        if (submitted == sessionStorage.rua9){
            score++;
        }
    }

    if(q == "ru10"){
        var submitted = $('input[name=ru10]:checked').val();
        if (submitted == sessionStorage.rua10){
            score++;
        }
    }
    if(q == "ru11"){
    var submitted = $('input[name=ru11]:checked').val();
      if (submitted == sessionStorage.rua11){
        score++;
      }
    }
    
    if(q == "ru12"){
      var submitted = $('input[name=ru12]:checked').val();
      if (submitted == sessionStorage.rua12){
        score++;
      }
    }
   
    if(q == "ru13"){
      var submitted = $('input[name=ru13]:checked').val();
      if (submitted == sessionStorage.rua13){
        score++;
      }
    }

    if(q == "ru14"){
      var submitted = $('input[name=ru14]:checked').val();
      if (submitted == sessionStorage.rua14){
        score++;
      }
    }

    if(q == "ru15"){
      var submitted = $('input[name=ru15]:checked').val();
      if (submitted == sessionStorage.rua15){
        score++;
      }
    }

    if(q == "ru16"){
      var submitted = $('input[name=ru16]:checked').val();
      if (submitted == sessionStorage.rua16){
        score++;
      }
    }

    if(q == "ru17"){
      var submitted = $('input[name=ru17]:checked').val();
      if (submitted == sessionStorage.rua17){
        score++;
      }
    }

    if(q == "ru18"){
      var submitted = $('input[name=ru18]:checked').val();
      if (submitted == sessionStorage.rua18){
        score++;
      }
    }

    if(q == "ru19"){
      var submitted = $('input[name=ru19]:checked').val();
      if (submitted == sessionStorage.rua19){
        score++;
      }
    }          

    if(q == "ru20"){
      var submitted = $('input[name=ru20]:checked').val();
      if (submitted == sessionStorage.rua20){
        score++;
      }
    }

    if(q == "ru21"){
      var submitted = $('input[name=ru21]:checked').val();
      if (submitted == sessionStorage.rua21){
        score++;
      }
    }
      
    if(q == "ru22"){
      var submitted = $('input[name=ru22]:checked').val();
      if (submitted == sessionStorage.rua22){
        score++;
      }
    }
   
    if(q == "ru23"){
      var submitted = $('input[name=ru23]:checked').val();
      if (submitted == sessionStorage.rua23){
        score++;
      }
    }

    if(q == "ru24"){
      var submitted = $('input[name=ru24]:checked').val();
      if (submitted == sessionStorage.rua24){
        score++;
      }
    }

    if(q == "ru25"){
      var submitted = $('input[name=ru25]:checked').val();
      if (submitted == sessionStorage.rua25){
        score++;
      }
    }

    if(q == "ru26"){
      var submitted = $('input[name=ru26]:checked').val();
      if (submitted == sessionStorage.rua26){
        score++;
      }
    }

    if(q == "ru27"){
      var submitted = $('input[name=ru27]:checked').val();
      if (submitted == sessionStorage.rua27){
        score++;
      }
    }

    if(q == "ru28"){
      var submitted = $('input[name=ru28]:checked').val();
      if (submitted == sessionStorage.rua28){
        score++;
      }
    }

    if(q == "ru29"){
      var submitted = $('input[name=ru29]:checked').val();
      if (submitted == sessionStorage.rua29){
        score++;
      }
    }          

    if(q == "ru30"){
      var submitted = $('input[name=ru30]:checked').val();
      if (submitted == sessionStorage.rua30){
        score++;
      }
    }

    if(q == "ru31"){
      var submitted = $('input[name=ru31]:checked').val();
      if (submitted == sessionStorage.rua31){
        score++;
      }
    }
      
    if(q == "ru32"){
      var submitted = $('input[name=ru32]:checked').val();
      if (submitted == sessionStorage.rua32){
        score++;
      }
    }
   
    if(q == "ru33"){
      var submitted = $('input[name=ru33]:checked').val();
      if (submitted == sessionStorage.rua33){
        score++;
      }
    }

    if(q == "ru34"){
      var submitted = $('input[name=ru34]:checked').val();
      if (submitted == sessionStorage.rua34){
        score++;
      }
    }

    if(q == "ru35"){
      var submitted = $('input[name=ru35]:checked').val();
      if (submitted == sessionStorage.rua35){
        score++;
      }
    }

    if(q == "ru36"){
      var submitted = $('input[name=ru36]:checked').val();
      if (submitted == sessionStorage.rua36){
        score++;
      }
    }

    if(q == "ru37"){
      var submitted = $('input[name=ru37]:checked').val();
      if (submitted == sessionStorage.rua37){
        score++;
      }
    }

    if(q == "ru38"){
      var submitted = $('input[name=ru38]:checked').val();
      if (submitted == sessionStorage.rua38){
        score++;
      }
    }

    if(q == "ru39"){
      var submitted = $('input[name=ru39]:checked').val();
      if (submitted == sessionStorage.rua39){
        score++;
      }
    }          

    if(q == "ru40"){
      var submitted = $('input[name=ru40]:checked').val();
      if (submitted == sessionStorage.rua40){
        score++;
      }
    }
return false;
}

//function below shows the order of functions we want to be read
window.addEventListener('load',init,false);
