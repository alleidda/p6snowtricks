/* const btn_add_video_link = document.querySelector(".add_video_link");
const div_add_video = document.querySelector(".add_video");
const new_video_input = `
<fieldset class="mb-3"><div><div class="mb-3"><input type="text" name="add_trick_form[add_plus_video][__name__][url]" required="required" pattern="^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$" title="Veuillez remplir une url valide" inputmode="url" class="form-control">        </div></div>        </fieldset>
`;

btn_add_video_link.addEventListener("click", function () {
    div_add_video.insertAdjacentHTML("beforeend", new_video_input);
});
 */

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
  