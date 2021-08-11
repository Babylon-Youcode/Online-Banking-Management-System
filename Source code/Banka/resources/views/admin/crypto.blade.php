<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col"></th>
      
      </tr>
    </thead>
    <tbody>

      <tr v-for="coin in coins">
        <th ></th>
        <td></td>
        <td></td>
        <td></td>
      </tr>
  
    </tbody>
  </table>


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    var coins = "";
    axios.get('https://yassinebouzar.000webhostapp.com/')
    .then(response => {
        coins =response.data.data[0].data.coins
        console.log(coins)
    })
</script>