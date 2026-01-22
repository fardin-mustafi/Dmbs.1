function toggleLogin(){
  let p = document.getElementById("loginPass");
  p.type = p.type === "password" ? "text" : "password";
}

function toggleSignup(){
  let p = document.getElementById("signupPass");
  p.type = p.type === "password" ? "text" : "password";
}
