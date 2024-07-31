<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab05</title>

    <style>
        table {
            border-collapse: collapse;
            width: auto;
        }

        table th {
            background-color: pink;
        }

        table th,
        table td {
            padding: 1vh;
        }

        table tr:nth-child(odd) td {
            background-color: white;
        }

        table tr:nth-child(even) td {
            background-color: lightgray;
        }
    </style>

    <script>
        var parking = [
            {
                vehicleNo: "WYR9941",
                driver: "Tham Mun Fatt",
                block: "E",
                floor: "2",
                bay: 11
            },
            {
                vehicleNo: "PKC7453",
                driver: "Chia Kim Hooi",
                block: "C",
                floor: "3A",
                bay: 15
            },
            {
                vehicleNo: "WC852E",
                driver: "Ho Jo Ee",
                block: "E",
                floor: "G",
                bay: 34
            },
            {
                vehicleNo: "AGP8681",
                driver: "Foo Yoke Wai",
                block: "C",
                floor: "3A",
                bay: 19
            },
            {
                vehicleNo: "WA1368Y",
                driver: "Wong Pei Lin",
                block: "A",
                floor: "1",
                bay: 1
            },
        ];


        function firstQuestion() {
            let wrapper = document.getElementById('wrapper');

            wrapper.innerHTML = '';

            let titles = ['Vehicle No.', 'Driver', 'Block', 'Floor', 'Bay No.'];
            let table = document.createElement('table');

            let thead = document.createElement('thead');
            let tbody = document.createElement('tbody');
            let titleTr = document.createElement('tr');

            for (title of titles) {
                let th = document.createElement('th');

                th.textContent = title;

                titleTr.appendChild(th);
            }

            thead.appendChild(titleTr);
            table.appendChild(thead);

            for (entry of parking) {
                let tr = document.createElement('tr');
                let vechicleCell = document.createElement('td');
                let driverCell = document.createElement('td');
                let blockCell = document.createElement('td');
                let floorCell = document.createElement('td');
                let bayCell = document.createElement('td');


                vechicleCell.textContent = entry.vehicleNo;
                driverCell.textContent = entry.driver;
                blockCell.textContent = entry.block;
                floorCell.textContent = entry.floor;
                bayCell.textContent = entry.bay;


                tr.appendChild(vechicleCell);
                tr.appendChild(driverCell);
                tr.appendChild(blockCell);
                tr.appendChild(floorCell);
                tr.appendChild(bayCell);

                tbody.appendChild(tr);
            }

            table.appendChild(tbody);

            wrapper.appendChild(table);

        }

        function secondQuestion() {

            let wrapper = document.getElementById('wrapper');

            wrapper.innerHTML = '';
            var contacts = [
                {
                    name: "Chia Kim Hooi",
                    phone: "+60124044404",
                    email: "chiakh@duck.com",
                    facebook: "xyz.chiakh"
                },
                {
                    name: "Chan Xiao Hui",
                    phone: "+60125785678",
                    email: "chanxh@pingguo.com",
                    facebook: "pqr.chanxh"
                },
                {
                    name: "Tan Chin Tiong",
                    phone: "+60193163616",
                    email: "tanct@burungtiong.com",
                    facebook: "abc.tanct"
                },
                {
                    name: "Foo Yoke Wai",
                    phone: "+60125575552",
                    email: "fooyw@chicken.com",
                    facebook: "ijk.fooyw"
                },
                {
                    name: "Ho Xin Yi",
                    phone: "+60195889776",
                    email: "hoxy@myna.com",
                    facebook: "mno.hoxy"
                }
            ];

            let titles = ['No.', 'Name', 'Phone', 'Email', 'Facebook'];
            let table = document.createElement('table');
            let thead = document.createElement('thead');

            let titleTr = document.createElement('tr');

            //create titles
            for (title of titles) {
                let th = document.createElement('th');

                th.textContent = title;

                titleTr.appendChild(th);
            }

            thead.appendChild(titleTr);
            table.appendChild(thead);

            let tbody = document.createElement('tbody');
            let numberCount = 1;

            for (contact of contacts) {
                let tr = document.createElement('tr');

                let numberTd = document.createElement('td');
                let nameTd = document.createElement('td');
                let phoneTd = document.createElement('td');
                let emailTd = document.createElement('td');
                let facebookTd = document.createElement('td');

                numberTd.textContent = numberCount;
                nameTd.textContent = contact.name;
                phoneTd.textContent = contact.phone;
                emailTd.innerHTML = `<a href="mailto:${contact.email}">${contact.email}</a>`;
                facebookTd.innerHTML = `<a href="https://www.facebook.com/${contact.facebook}" target="blank">${contact.facebook}</a>`;

                tr.appendChild(numberTd);
                tr.appendChild(nameTd);
                tr.appendChild(phoneTd);
                tr.appendChild(emailTd);
                tr.appendChild(facebookTd);

                tbody.appendChild(tr);

                numberCount++;
            }

            table.appendChild(tbody);

            wrapper.appendChild(table);
        }

    </script>
</head>

<body>
    <div id="wrapper"></div>
    <button onclick="firstQuestion()">First Question</button> <br>
    <button onclick="secondQuestion()">Second Question</button> <br>

</body>

</html>