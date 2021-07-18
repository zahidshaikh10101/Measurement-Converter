function converter(source, input) {
    input = parseFloat(input);
    if (source == "celsius") {
      fahrenheit.value = ((input * 5 / 9) + 32);
      kelvin.value = input + 273.15;
    }
    if (source == "fahrenheit") {
      celsius.value = ((input - 32) * 5 / 9);
      kelvin.value = (((input - 32) * 5 / 9) + 273.15);
    }
    if (source == "kelvin") {
      fahrenheit.value = (((input - 273.15) * 5 / 9) + 32);
      celsius.value = input - 273.15;
    }
    if (source == "kilograms") {
      pounds.value = input * 2.2046;
      ounces.value = input * 0.035274 / 1000;
      ton.value = input * 1000;
    }
    if (source == "pounds") {
      kilograms.value = input / 2.2046;
      ounces.value = input / 16;
      ton.value = input *  0.00045359237;
    }
    if (source == "ounces") {
      pounds.value = input * 16;
      kilograms.value = input * 1000 / 0.035274;
      ton.value = input / 32000;
    }
    if (source == "ton") {
      pounds.value = input /  0.00045359237;
      kilograms.value = input / 1000;
      ounces.value = input * 32000; 
    }
    if (source == "centimetres") {
      inches.value = input * 0.394;
      feet.value = input * 0.0328;
      millimetres.value = input * 10;
    }
    if (source == "millimetres") {
      inches.value = input / 25.4; 
      feet.value = input / 304.8;
      centimetres.value = input / 10; 
    }
    if (source == "inches") {
      centimetres.value = input / 0.394;
      feet.value = input / 12;
      millimetres.value = input * 25.4;
    }
    if (source == "feet") {
      inches.value = input * 12;
      centimetres.value = input / 0.0328;
      millimetres.value = input * 304.8;
    }
    if (source == "kilometres") {
      miles.value = input * 0.621;
      nauticalMiles.value = input * 0.54;
      yards.value = input * 1093.6;
    }
    if (source == "miles") {
      kilometres.value = input / 0.621;
      nauticalMiles.value = input * 0.87;
      yards.value = input * 1760;
    }
    if (source == "nauticalMiles") {
      miles.value = input / 0.87;
      kilometres.value = input / 0.54;
      yards.value = input * 2,025;
    }
    if (source == "yards") {
      kilometres.value = input / 1093.6;
      miles.value = input / 1760;
      nauticalMiles.value = input / 2,025; 
    }
    if (source == "joules") {
      kilocalories.value = input / 4148;
      watthour.value = input / 3600;
      horsepower.value = input * 3.77672671;
    }
    if (source == "kilocalories") {
      joules.value = input * 4148;
      watthour.value = input * 1.162;
      horsepower.value = input / 641.615691; 
    }
    if (source == "horsepower") {
      kilocalories.value = input * 641.615691; 
      joules.value = input / 3.77672671; 
      watthour.value = input / 0.0013596216; 
    }
    if (source == "watthour") {
      kilocalories.value = input / 1.162;
      joules.value = input * 3600;
      horsepower.value = input * 0.0013596216;
    }
    if (source == "second") {
      minutes.value = input / 60;
      hours.value = input / 3600;
      day.value = input / 86400;
    }
    if (source == "minutes") {
      second.value = input * 60;
      hours.value = input / 60;
      day.value = input / 1440; 
    }
    if (source == "hours") {
      second.value = input * 3600; 
      minutes.value = input * 60; 
      day.value = input / 12; 
    }
    if (source == "day") {
      second.value = input * 86400;
      minutes.value = input * 1440;
      hours.value = input * 12;
    }
  }
  