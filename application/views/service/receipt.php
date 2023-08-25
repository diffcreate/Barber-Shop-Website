
<div class="container">
    <div class="row justify-content-center">
		<div class="receipt">
		<table>
		<tr>
			<td colspan="1" style="text-align: center;"><h1>RECEIPT</h1></td>
		</tr>
		<tr>
			<td colspan="1"><h4>Heritage Barber</h4>
		Jl. Sulthan Agung, Bantul.
			DI Yogyakarta</td>
		</tr>
		<?php foreach($data_receipt as $data):?>
		<tr>
			<td><?php echo $data->Jadwal?></td>
			<td></td>
		</tr>
		<?php endforeach?>
		<tr style="height: 30px;">
			<td></td>
		</tr>
		<tr>
			<td colspan="1"><h2>Description</h3>
			<h2>________________________________________________</h2></td>
		</tr>
		<?php foreach($data_receipt as $data):?>
		<tr>
			<td><?php echo $data->jenis_cut?></td>
			<td><?php 
			$jenis = $data->jenis_cut;
			switch ($jenis) {
				case 'Premium Cut':
					$prem = 15000;
					$cut = $prem;
					echo "15000";
					break;
				
				case "Kid's Cut":
					$kid = 10000;
					$cut = $kid;
					echo "10000";
					break;
			}
			?></td>
		</tr>
		<tr>
			<td><?php echo $data->service?></td>
			<td><?php 
			$jenis_ser = $data->service;
			switch ($jenis_ser) {
				case 'Coloring':
					$coloring = 10000;
					$serv = $coloring;
					echo "10000";
					break;
				
				case "Massage":
					$massage = 5000;
					$serv = $massage;
					echo "5000";
					break;
					
				case "Shaving":
					$shaving = 3000;
					$serv = $shaving;
					echo "3000";
					break;

				case "Hair wash":
					$wash = 2000;
					$serv = $wash;
					echo "2000";
					break;

				case "Vitamin":
					$vit = 10000;
					$serv = $vit;
					echo "10000";
					break;
			}
			?></td>
		</tr>
		<?php endforeach?>
		<tr>
			<td colspan="1"><h2>________________________________________________</h2></td>
		</tr>
		<tr>
			<td>Total:</td>
			<td><?php 
			$hasil = $serv + $cut;
			echo $hasil?></td>
		</tr>
		<tr><b>
			<td>Code:</td>
			<td><?php 
			
			$Length = 10;
			$RandomString = substr(str_shuffle(md5(time())), 0, $Length);
			echo $RandomString;
			?></td>
			</b>
		</tr>
		
	
</table>
	</div>
    </div>
</div>

<script>window.print();</script>
