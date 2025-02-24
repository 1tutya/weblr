function validateForm() {
    let isValid = true;

    const name = document.getElementById('name').value;
    const nameError = document.getElementById('nameError');
    if (!/^[А-Яа-яЁё\s]+$/.test(name)) {
        nameError.textContent = 'ФИО должно содержать только русские буквы и пробелы.';
        isValid = false;
    } else {
        nameError.textContent = '';
    }

    const brand = document.getElementById('brand').value;
    const brandError = document.getElementById('brandError');
    if (brand.trim() === '') {
        brandError.textContent = 'Марка автомобиля обязательна.';
        isValid = false;
    } else {
        brandError.textContent = '';
    }

    const model = document.getElementById('model').value;
    const modelError = document.getElementById('modelError');
    if (model.trim() === '') {
        modelError.textContent = 'Модель автомобиля обязательна.';
        isValid = false;
    } else {
        modelError.textContent = '';
    }

    const year = document.getElementById('year').value;
    const yearError = document.getElementById('yearError');
    if (year < 1960 || year > 2025) {
        yearError.textContent = 'Год производства должен быть между 1960 и 2025.';
        isValid = false;
    } else {
        yearError.textContent = '';
    }

    const mileage = document.getElementById('mileage').value;
    const mileageError = document.getElementById('mileageError');
    if (mileage < 0) {
        mileageError.textContent = 'Пробег не может быть отрицательным.';
        isValid = false;
    } else {
        mileageError.textContent = '';
    }

    const price = document.getElementById('price').value;
    const priceError = document.getElementById('priceError');
    if (price < 0) {
        priceError.textContent = 'Цена не может быть отрицательной.';
        isValid = false;
    } else {
        priceError.textContent = '';
    }

    return isValid;
}