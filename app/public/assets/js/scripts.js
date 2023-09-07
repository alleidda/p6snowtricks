
const addFormToCollection = (e) => {
    const collectionHolder = document.querySelector(
      "." + e.currentTarget.dataset.collectionHolderClass
    );
  
    const item = document.createElement("li");
  
    item.innerHTML = collectionHolder.dataset.prototype.replace(
      /__name__/g,
      collectionHolder.dataset.index
    );
  
    collectionHolder.appendChild(item);
  
    collectionHolder.dataset.index++;
  };
  
  document.querySelectorAll(".btn_add_video_link").forEach((btn) => {
    
    btn.addEventListener("click", addFormToCollection);
  });
  