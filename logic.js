   function getFormData() {
       let dateOfBirth = document.getElementById('dateInput').value;
       data = new FormData();
       data.set('dateOfBirth', dateOfBirth);
       return data;
   }
   
   function addHoroscope() {
       fetch ("server/addHoroscope.php", {
       method: 'POST',
       body: getFormData()
       }).then((response) => {
           return response.json()
       }).then((data) => {
           console.log(data);
           viewHoroscope();
       }).catch ((err) => {
           console.log ('Error:', err);
       })   
    }

    function viewHoroscope() {
        fetch('server/viewHoroscope.php', {
            method: 'GET'
        }).then((response) => response.json())
        .then((json) => {
            let showSign = document.getElementById('showSign');
            showSign.innerText = json;
            console.log(showSign);
        })
    }
   
    function updateHoroscope() {
        fetch('server/updateHoroscope.php', {
            method: 'POST',
            body: getFormData()
            }).then((response) => {
                return response.json()
            }).then((data) => {
                viewHoroscope()
                console.log(data);
            })
    }
   
    function deleteHoroscope() {
        fetch('server/deleteHoroscope.php', {
            method: 'DELETE'
            }).then((response) => {
                return response.json()
            }).then((data) => {
                viewHoroscope();
                console.log(data)
            })
    }

   