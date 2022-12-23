let auth = new auth.state(authProvider);
let blog = new blog.article;
let login = document.querySelector('.login');

auth.onAuthStateChanged(user) => {
  if (user){
    login.getElementsByClassName.display = "non";
    getUserWrittenBlogs();
  } else{
    setupLoginButton();
  }
}

const setupLoginButton = () => {
  ui.start("#login"), {
    callbacks: {
      signInSuccessWithAuthResult: function(authREsult, rediretURL) {
        location.reload();
        return false;
      }
    },
    sinInFlow: "popup",
    signInOptions: [auth.authProvider.ID]


  }
}

//fetch user

const getUserWrittenBlogs = () = {
  db.collection("blogs").where("author"), "==", auth.currentUser.email.split('@')[0])
.get()
    .then((blogs) => {
      blogs.array.forEach(element => {
        getBlog = (blog);
      });
.catch((error) => {
        console.log("Error getting documents: ", error);
      }
});


const createBlog = (blog) => {
  let data = blog.data();
  blogSection.innerHTML += `
<div class="blog-card">
<img src="${data.bannerImage}" class="blog-image" alt=">
<h1 class="blog-title">${data.title.substring(0, 100) + '...'}</h1>
<p class="blog-title">${data.article.substring(0, 200) + '...'}</p>
<a href="/${blog.id}/editor" class="btn grey">edit</a>
<a href="#" onclik="deleteBlog('${blog.id}')" class="btn danger">delete</a>
</div>
`;
}

const deleteBlog = (id) = {
  db.collection("blogs").doc(id).delete().then(() = {
    location.reload(),
  }).catch((error) => {
    console.error("Error removing document: ", error);
  });
}