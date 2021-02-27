<div class="container">
	<!-- Outer Row -->
	<div class="row justify-content-center">
		<div class="col-xl-5 col-lg-5 col-md-5">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-12">
							<div class="p-5">
								<div class="text-center mb-3">
									<img src="<?= base_url()?>assets/img/logo.png" width="75" class="img-fluid img-shadow">
								</div>
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4"><?= $title?></h1>
								</div>
								<?php if( $this->session->flashdata('pesan') ) : ?>
									<div class="row">
										<div class="col-12">
											<?=$this->session->flashdata('pesan')?>
										</div>
									</div>
								<?php endif; ?>
								<form action="registrasi/add_peserta" method="POST">
                                    <div class="form-group">
                                        <label for="nama">Nama Peserta</label>
                                        <input type="text" name="nama" class="form-control form-control-sm" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="t4_lahir">Tempat Lahir</label>
                                        <input type="text" name="t4_lahir" id="t4_lahir" class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tgl Lahir</label>
                                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control form-control-sm" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No Whatsapp</label>
                                        <input type="text" name="no_hp" id="no_hp" class="form-control form-control-sm" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" class="form-control form-control-sm">
                                        <small id="emailHelp" class="form-text text-danger">*email tidak wajib diisi</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="catatan">Program Yang Diambil</label>
                                        <!-- <small id="catatanHelp" class="form-text text-muted mt-0">Checlist program yang diambil</small> -->
                                        <div class="row checkbox-group required">
                                            <?php foreach ($program as $data) :?>
                                                <div class="col-12 col-md-6">
                                                    <input type="checkbox" class="mr-1" name="program[]" id="<?= $data['id_program']?>" value="<?= $data['program']?>"><label for="<?= $data['id_program']?>"><?= $data['program']?></label>
                                                </div>
                                            <?php endforeach;?>
                                            <!-- <div class="col-6">
                                                <input type="checkbox" class="mr-1" name="program[]" id="program2" value="Hifdzi 2"><label for="program2">Hifdzi 2</label>
                                            </div>
                                            <div class="col-6">
                                                <input type="checkbox" class="mr-1" name="program[]" id="program3" value="Tarkibi 1"><label for="program3">Tarkibi 1</label>
                                            </div>
                                            <div class="col-6">
                                                <input type="checkbox" class="mr-1" name="program[]" id="program4" value="Tarkibi 2"><label for="program4">Tarkibi 2</label>
                                            </div> -->
                                        </div>
                                    </div>
                                        <!-- <textarea name="catatan" id="catatan" class="form-control form-control-sm" required></textarea> -->
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-sm btn-primary" id="btnSimpan">Simpan</button>
                                    </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    $("#btnSimpan").click(function(){
        if(confirm("Yakin akan menyimpan data Anda?")){
            if($('div.checkbox-group.required :checkbox:checked').length == 0){
                alert("Pilih Program terlebih dahulu")
                return false;
            }
        } else {
            return false
        }
    })

</script>