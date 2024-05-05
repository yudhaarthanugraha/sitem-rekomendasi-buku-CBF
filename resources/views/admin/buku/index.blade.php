  @extends('admin.layout.main')
  @section('main')
      <div class="page-container2">
          <!-- headers-->
          @include('admin.layout.headers')
          <!-- END headers-->
          <div class="row">
              <div class="col-lg-6">
                  <!-- END USER DATA-->
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <!-- DATA TABLE -->
                  <div class="table-data__tool bg-light py-3 ">
                      <div class="table-data__tool-right ml-3">
                          <a href="" class="au-btn au-btn-icon au-btn--green au-btn--small">
                              <i class="zmdi zmdi-plus"></i>Tambah</a>
                      </div>
                  </div>
                  <div class="table-responsive ">
                      {{-- table-responsive-data2 --}}
                      <table class="table table-data2">
                          <thead>
                              <tr>
                                  <th>Judul</th>
                                  <th>Penulis</th>
                                  <th>Tahun terbit</th>
                                  <th>Gendre</th>
                                  <th>Sinopsis</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($books as $data)
                                  <tr class="tr-shadow">
                                      <td>{{ $data['judul'] }}</td>
                                      <td>{{ $data['penulis'] }}</td>
                                      <td>{{ $data['tahun_terbit'] }}</td>
                                      <td>{{ $data['gendre'] }}</td>
                                      <td>{{ $data['sinopsis'] }}</td>

                                      <td class="d-flex justify-space-between ">
                                          <div class="table-data-feature w-50  ">

                                              <a href="" class="item" title="Edit">
                                                  <i class="zmdi zmdi-edit"></i></a>
                                              <form action="" method="POST" class="item" data-toggle="tooltip"
                                                  data-placement="top" title="Hapus">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button
                                                      onclick="return confirm('Apakah Anda yakin ingin menghapus penduduk?')"
                                                      type="submit">
                                                      <i class="zmdi zmdi-delete"></i> </button>
                                              </form>
                                          </div>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
                  <!-- END DATA TABLE -->
              </div>
          </div>
          {{-- footer --}}
          <div class="row mt-5">
              <div class="col-md-12">
              </div>
          </div>
      </div>
  @endsection
