const articleTempl=document.querySelector("#trending article");
for (const anyArticle of articlesArray) {
    const articleClone=articleTempl.cloneNode(true);
    document.querySelector("section").append(articleClone);
    articleClone.classList.add(anyArticle.category);
    articleClone.querySelector("h2").innerText=anyArticle.title;
    articleClone.querySelector("p").innerText=anyArticle.content;
    articleClone.querySelector("a").href=anyArticle.url;
}
articleTempl.remove();