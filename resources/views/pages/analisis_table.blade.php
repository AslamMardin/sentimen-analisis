 <table class="table">
  <thead>
    <tr>
      <th scope="col" width="5%">#</th>
      <th scope="col" width="55%">Kategori</th>
      <th scope="col" width="10%">Negatif</th>
      <th scope="col" width="10%">Netral</th>
      <th scope="col" width="10%">Positif</th>
      <th scope="col" width="10%">Total</th>
      <th scope="col" width="10%">Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Universitas Al Asyariah Mandar</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>{{ ($hitung['unasman'] > 99) ? "100+" : $hitung['unasman'] }}</td>
      <td><a href="" class="btn btn-sm btn-danger">Details</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Polewali Mandar</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>{{ ($hitung['polewali']  > 99) ? "100+" : $hitung['polewali']}}</td>
      <td><a href="" class="btn btn-sm btn-danger">Details</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Sulawesi Barat</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>{{ ($hitung['sulbar'] > 99) ? "100+" : $hitung['sulbar'] }}</td>
      <td><a href="" class="btn btn-sm btn-danger">Details</a></td>
    </tr>
    
  </tbody>
</table>