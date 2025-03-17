document.addEventListener('DOMContentLoaded', function() {
    const brandInput = document.getElementById('brand');
    const modelInput = document.getElementById('model');
    const yearInput = document.getElementById('year');
    const mileageInput = document.getElementById('mileage');
    const priceInput = document.getElementById('price');

    brandInput.addEventListener('input', validateBrand);
    modelInput.addEventListener('input', validateModel);
    yearInput.addEventListener('input', validateYear);
    mileageInput.addEventListener('input', validateMileage);
    priceInput.addEventListener('input', validatePrice);

    brandInput.addEventListener('blur', validateBrand);
    modelInput.addEventListener('blur', validateModel);
    yearInput.addEventListener('blur', validateYear);
    mileageInput.addEventListener('blur', validateMileage);
    priceInput.addEventListener('blur', validatePrice);

    function validateBrand() {
        const brand = brandInput.value;
        const brandError = document.getElementById('brandError');
        if (brand.trim() === '') {
            brandError.textContent = 'Марка автомобиля обязательна.';
            brandInput.classList.add('invalid');
            return false;
        } else if (/\d/.test(brand)) {
            brandError.textContent = 'Марка автомобиля не должна содержать цифр.';
            brandInput.classList.add('invalid');
            return false;
        }
        else {
            brandError.textContent = '';
            brandInput.classList.remove('invalid');
            return true;
        }
    }

    function validateModel() {
        const model = modelInput.value;
        const modelError = document.getElementById('modelError');
        if (model.trim() === '') {
            modelError.textContent = 'Модель автомобиля обязательна.';
            modelInput.classList.add('invalid');
            return false;
        } else {
            modelError.textContent = '';
            modelInput.classList.remove('invalid');
            return true;
        }
    }

    function validateYear() {
        const year = yearInput.value;
        const yearError = document.getElementById('yearError');
        if (year < 1960 || year > 2025 || isNaN(year)) {
            yearError.textContent = 'Год производства должен быть числом между 1960 и 2025.';
            yearInput.classList.add('invalid');
            return false;
        } else {
            yearError.textContent = '';
            yearInput.classList.remove('invalid');
            return true;
        }
    }

    function validateMileage() {
        const mileage = mileageInput.value;
        const mileageError = document.getElementById('mileageError');
        if (mileage < 0 || isNaN(mileage)) {
            mileageError.textContent = 'Пробег должен быть неотрицательным числом.';
            mileageInput.classList.add('invalid');
            return false;
        } else {
            mileageError.textContent = '';
            mileageInput.classList.remove('invalid');
            return true;
        }
    }

    function validatePrice() {
        const price = priceInput.value;
        const priceError = document.getElementById('priceError');
        if (price < 0 || isNaN(price)) {
            priceError.textContent = 'Цена должна быть неотрицательным числом.';
            priceInput.classList.add('invalid');
            return false;
        } else {
            priceError.textContent = '';
            priceInput.classList.remove('invalid');
            return true;
        }
    }

    window.validateForm = function() {
        const isBrandValid = validateBrand();
        const isModelValid = validateModel();
        const isYearValid = validateYear();
        const isMileageValid = validateMileage();
        const isPriceValid = validatePrice();

        return isBrandValid && isModelValid && isYearValid && isMileageValid && isPriceValid;
    };
});