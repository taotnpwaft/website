import { data } from "jquery"

let blogId = decodeURI(location.pathname.split('/').pop())

let docRef = db.collection('blogs').doc(blogId)

docRef.get().then(doc => {
  if (doc.exists) {
    setupBlog(doc.data())
  } else {
    location.replace('/')
  }
})

const setupBlog = (data) => {
  const banner = document.querySelector('.banner')
  const blogTitle = document.querySelector('.title')
  const titleTag = document.querySelector('title')
  const publish = document.querySelector('.published')

  banner.style.backgroundImage = `url(${data.bannerImage})`

  titleTag.innerHTML += blogTitle.innerHTML = data.title
  publish.innerHTML += data.publishedAt

  const article = document.querySelector('.article')
  addArticle(article, data.article)
}

const addArticle = (ele, data) => {
  data = data.split('\n').filter(item => item.length)
  // console.log(data);

  data.forEach(item => {
    // check for heading
    if (item[0] == '#') {
      let hCount = 0;
      let i = 0;
      while (item[i] == '#') {
        hCount++;
        i++;
      }
      let tag = `h${hCount}`;
      ele.innerHTML += `<${tag}>${item.slice(hCount, item.length)}</${tag}>`
    }
    //checking for image format
    else if (item[0] == '!' && item[1] == '[') {
      let separator;

      for (let i = 0; i <= item.length; i++) {
        if (item[i] == ']' && item[i + 1] == '(' && item[item.length - 1] == ')') {
          separator = i;
        }
      }

      let alt = item.slice(2, separator);
      let src = item.slice(separator + 2, item.length - 1);
      ele.innerHTML += `
      <img src="${src}" alt="${alt}" class="article-image">
      `;
    }

    else {
      ele.innerHTML += `<p>${item}</p>`;
    }
  })
}

// new functions 

    try {
      if (data.author == auth.currentUser.email.split('@')[0]) {
        let editBtn = document.getElementById('edit-blog-btn');
        editBtn.style.display = 'inline';
        editBtn.href = `${blogId}/editor`;
      }
    } catch {
      // nothing
    }

    const blogSection = document.querySelector(.blog-section);

    db.collection("blog").get().then((blogs) => {
      blogs.forEach(blog => {
        if(blog.id != decodeURI(location.pathname.split("/").pop())){
          createBlog(blog);
        }
      })
    })

    const createBlog = (blog) = {
      let data = blog.data();
      blogSection.innerHTML += `
      <div class="blog-card">
        <img src="${data.bannerImage}" class="blog-image" alt="">
        <h1 class="blog-title">${data.title.substring(0, 100) + '...'}</h1>
        <p class="blog-overview">${data.article.substring(0, 200) + '...'}</p>
        <a href="/${blog.id} class="btn dark">read</a>
        </div>
      `;
    }


    publish.innerHTML += data.publishedAt;
    publish.innerHTML += ` -- ${data.author}`;