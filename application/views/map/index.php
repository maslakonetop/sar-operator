</div>
	<div class="row">
		<div class="col-md-3">
            <form>
                <div class="form-group">
                    <label for="nama">Longitude</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">latitude</label>
                    <input type="text" class="form-control" id="alamat">
                </div>
                <div class="form-grup">
                    <label for="nohp">Nomer HP</label>
                    <input type="text" class="form-control" id="nohp">
                </div>
                <div class="form-grup">
                    <label for="perkiraanlokasi">Perkiraan Lokasi</label>
                    <input type="text" class="form-control" id="perkiraanlokasi">
                </div>
                <div class="form-grup">
                    <label for="perkiraanlokasi">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namalengkap">
                </div>
                <div class="form-grup">
                    <label for="jeniskejadian">Jenis Kejadian</label>
                    <select name="jeniskejadian" class="selectpicker form-control" data-live-search="true">
                    <option value="Kecelakaan">Kecelakaan</option>

                            <option value="Perampokan">Perampokan</option>

                            <option value="Pencurian">Pencurian</option>

                            <option value="Penjambretan">Penjambretan</option>

                            <option value="Tawuran">Tawuran</option>

                            <option value="KDRT">KDRT</option>

                            <option value="Transaksi Narkoba">Transaksi Narkoba</option>

                            <option value="Balap Liar">Balap Liar</option>

                            <option value="Kebakaran">Kebakaran</option>

                            <option value="Kebakaran Rumah / Gedung">Kebakaran Rumah / Gedung</option>

                            <option value="Kebakaran Lahan">Kebakaran Lahan</option>

                            <option value="Perselingkuhan">Perselingkuhan</option>

                            <option value="Orang Sakit">Orang Sakit</option>

                            <option value="Penemuan Mayat">Penemuan Mayat</option>

                        </select>
                </div>
                <div class="form-grup">
                    <label for="kronologikejadian">Kronologi Kejadian</label>
                    <input type="text" class="form-control" id="kronologikejadian">
                </div>
                <div class="form-grup">
                    <label for="keteranganlain">Kronologi</label>
                    <input type="text" class="form-control" id="keteranganlain">
                </div>
                <div class="form-grup">
                    <label for="waktukejadian">Waktu Kejadian</label>
                    <input type="text" class="form-control" id="waktukejadian">
                </div>		
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>   
		<div class="col-md-9" style="background-color:LightCyan;">
        <div id='map' style='width: 100%; height: 100%;'>
                <script>
                    mapboxgl.accessToken = 'pk.eyJ1IjoibWFzbGFrb25lIiwiYSI6ImNrbGJlYzR3NDBxaGsydnRrYmU3YTUzdWcifQ.eCqIoeIhVWb-XOAWHrFy7A';
                    var map = new mapboxgl.Map({
                        container: 'map',
                        style: 'mapbox://styles/mapbox/streets-v11',
                        center: [108.829877, -7.476625],
                        zoom: 9.39
                });
                map.addControl(new mapboxgl.NavigationControl());
                </script>
            </div>
		</div>
	</div>
	