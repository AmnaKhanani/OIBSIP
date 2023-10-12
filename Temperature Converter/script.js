function convertTemperature() {
    const temperatureInput = parseFloat(document.getElementById('temperatureInput').value);
    const unitSelect = document.getElementById('unitSelect').value;

    let convertedTemperature;
    let resultUnit;

    if (isNaN(temperatureInput)) {
        alert('Please enter a valid number for temperature.');
        return;
    }

    switch (unitSelect) {
        case 'celsiusToFahrenheit':
            convertedTemperature = (temperatureInput * 9/5) + 32;
            resultUnit = 'Fahrenheit';
            break;
        case 'fahrenheitToCelsius':
            convertedTemperature = (temperatureInput - 32) * 5/9;
            resultUnit = 'Celsius';
            break;
        case 'celsiusToKelvin':
            convertedTemperature = temperatureInput + 273.15;
            resultUnit = 'Kelvin';
            break;
        case 'kelvinToCelsius':
            convertedTemperature = temperatureInput - 273.15;
            resultUnit = 'Celsius';
            break;
        default:
            alert('Please select a conversion option.');
            return;
    }

    const resultElement = document.getElementById('result');
    resultElement.innerText = `Converted temperature: ${convertedTemperature.toFixed(2)} ${resultUnit}`;
}
