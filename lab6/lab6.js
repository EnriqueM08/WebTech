var car = {
    brandOfCar : 'Brand',
    horsePower : 0,
    modelName : 'Model',
    printCarInfo : function() {
        document.write("Car Info: " + this.brandOfCar + ' ' + this.modelName);
    },
    alertCarHorsePower : function() {
        alert('Horse Power of Vehicle: ' + this.horsePower);
    }
}