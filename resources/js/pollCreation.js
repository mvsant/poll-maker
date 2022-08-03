const submitButton = document.getElementById("submitButton");
const addAlternativeBtn = document.getElementById("addAlternativeBtn");
const removeAlternativeBtn = document.getElementById("removeAlternativeBtn");
const alternativesList = document.getElementById("alternativesList");


function handleAlternative(altNumber){
    return `
    <div class="relative z-0 mb-6 group w-[40vw]">
    <input type="text" name="alternative[]" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
    <label for="alternative[]" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alternative ${altNumber}</label>
    </div>` 
}

function handleSubmitStatus(size) {
    if (size < 3) {
        submitButton.disabled = true;
        submitButton.style.opacity = "0.5";
        submitButton.style.backgroundColor = "gray";

    } else {
        submitButton.disabled = false;
        submitButton.style.opacity = "1";
        submitButton.style.backgroundColor = "";
    }
}

handleSubmitStatus(alternativesList.childElementCount);

addAlternativeBtn.addEventListener("click", (event) => {
    let size = alternativesList.childElementCount;
    event.preventDefault();
    size++;
    alternativesList.insertAdjacentHTML('beforeend', handleAlternative(size))
    handleSubmitStatus(size);
})

removeAlternativeBtn.addEventListener("click", (event) => {
    let size = alternativesList.childElementCount
    event.preventDefault();
    size--;
    alternativesList.removeChild(alternativesList.lastElementChild);
    handleSubmitStatus(size);
})