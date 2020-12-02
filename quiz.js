function check(){
  var answer;
  var q1=document.quiz.question1.value;
  var q2=document.quiz.question2.value;
  var q3=document.quiz.question3.value;

  var q4=document.quiz.question4.value;
  var q5=document.quiz.question5.value;
  var q6=document.quiz.question6.value;

  var q7=document.quiz.question7.value;
  var q8=document.quiz.question8.value;
  var q9=document.quiz.question9.value;

  var q10=document.quiz.question10.value;
  var q11=document.quiz.question11.value;
  var q12=document.quiz.question12.value;

  document.write("Congratulations, your personality type is: \n")
  //Checking if the Extrovert or Introvert (q1,q2,q3)
  if((q1=="a" && q2=="a") || (q2=="a" && q3=="a") || (q3=="a" && q1=="a")){
    document.write("E");
  }
  else{
    document.write("I");
  }
  //Checking if Intuitive or Sesning (q4,q5,q6)
  if((q4=="a" && q5=="a") || (q5=="a" && q6=="a") || (q6=="a" && q4=="a")){
    document.write("N");
  }
  else{
    document.write("S");
  }
  //checking if Thinking or Feeling (q7,q8,q9)
  if((q7=="a" && q8=="a") || (q8=="a" && q9=="a") || (q9=="a" && q7=="a")){
    document.write("T");
  }
  else{
    document.write("F");
  }
  //checking if Judging or Perceving (q10,q11,q12)
  if((q10=="a" && q11=="a") || (q11=="a" && q12=="a") || (q12=="a" && q10=="a")){
    document.write("J");
  }
  else{
    document.write("P");
  }
}
