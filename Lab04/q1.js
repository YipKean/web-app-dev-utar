function workingWithNumbers() {
    let numbers = [75.43, 18.76, 99.41, 18.78, 74.53, 86.81, 23.51, 66.17];
    var sumOfNums = 0;
    var averageOfNums = 0;

    for (number of numbers) {
        sumOfNums += number;
    }

    //Only take 2 decimal places
    sumOfNums = sumOfNums.toFixed(3);
    averageOfNums = sumOfNums / numbers.length;

    console.log('Sum of numbers: ' + sumOfNums);
    console.log('Average : ' + averageOfNums);

    //Change values of numbers
    for (let i = 0; i < numbers.length; i++) {
        numbers[i] *= 0.8683;

        numbers[i] = numbers[i].toFixed(3);
    }

    console.log('\nAfter Multiply: ' + numbers);

    //Object
    let customer = {
        id: 'P8681',
        name: 'Foo Yoke Kai',
        email: 'fooyokekai@gmel.my',
        phonee: '+60123456789',
        address: '313 Jalan Burung Tiong, 52100 Kuala Lumpur'
    }

    console.log(customer);


    //array object
    let customers = [
        {
            id: 'P8681',
            name: 'Foo Yoke Kai',
            email: 'fooyokekai@gmel.my',
            phonee: '+60123456789',
            address: '313 Jalan Burung Tiong, 52100 Kuala Lumpur'
        },
        {
            id: 'P8682',
            name: 'Ang Joe Kai',
            email: 'Ang@gmel.my',
            phonee: '+6222222',
            address: '313 Ang Taman'
        },
        {
            id: 'P8683',
            name: 'Teng Mei Kai',
            email: 'Teng@gmel.my',
            phonee: '+6333333',
            address: '313 Teng Kuala Lumpur'
        },
        {
            id: 'P8684',
            name: 'Foo Ali Ali',
            email: 'Ali@gmel.my',
            phonee: '+64444',
            address: '313 Ali ALi 52100 Kuala Lumpur'
        },
        {
            id: 'P8685',
            name: 'Muhammad a/l Yoke Kai',
            email: 'Muhammad@gmel.my',
            phonee: '+6555555555',
            address: '313 masjid 52100 Kuala Lumpur'
        }
    ]


    console.log(customers);
}

workingWithNumbers();