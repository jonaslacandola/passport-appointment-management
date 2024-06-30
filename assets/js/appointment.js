const form = document.querySelector("#appointment-form");
const submit = document.querySelector("#submit");

const name = document.querySelector("#name");
const dateOfBirth = document.querySelector("#dateOfBirth");
const gender = document.querySelector("#gender");
const _location = document.querySelector("#location");
const reason = document.querySelector("#reason");

const sum_name = document.querySelector("#sum-name");
const sum_birthdate = document.querySelector("#sum-birthdate");
const sum_gender = document.querySelector("#sum-gender");
const sum_reason = document.querySelector("#sum-reason");
const sum_place = document.querySelector("#sum-place");

submit.addEventListener("click", () => {
  form.submit();
});

reason.addEventListener("change", () => (sum_reason.innerText = reason.value));
name.addEventListener("focusout", () => (sum_name.innerText = name.value));
gender.addEventListener("change", () => (sum_gender.innerText = gender.value));
_location.addEventListener("change", () => {
  const map = document.querySelector("#gmap_canvas");
  map.src = `https://maps.google.com/maps?q=${_location.value}&t=&z=18&ie=UTF8&iwloc=&output=embed`;

  sum_place.innerText = ` at ${_location.value}`;
});

dateOfBirth.addEventListener("click", () => (dateOfBirth.type = "date"));
dateOfBirth.addEventListener("focusout", () => {
  sum_birthdate.innerText = dateOfBirth.value
    ? formatDate(new Date(dateOfBirth.value))
    : "";
});
