<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <!-- my css -->
  <link rel="stylesheet" href="style.css" />
  <title>My Portofolio | Gunari Farhan</title>
  <link href="img/icon.png" rel="icon" />
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold fs-3 text-dark" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif" href="index.html">My Portofolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse fs-5" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#skills">Skills</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron text-center" style="background-color: #ff1616">
    <div class="container">
      <img src="img/gunari.jpg" alt="gunari" width="200" class="rounded-circle img-thumbnail" />
      <h3 class="mt-3 fw-bold">I'M</h3>
      <h1 id="full_name" class="display-4 fw-bold">Gunari Farhan</h1>
      <!-- tentukan ID dengan nama yang mudah diingat -->
      <p id="job_position" class="lead fw-bold">Student | Web Programming</p>
    </div>
  </section>
  <!-- End Jumbotron -->
  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row mb-3">
        <div class="col d-lg-block">
          <h1 class="fw-bold text-center text-dark mb-3">About Me</h1>
        </div>
        <div class="row">
          <!-- desktop -->
          <div class="col-lg-12 col-sm-12 d-lg-block">
            <div class="text-about text-dark">
              <p class="mt-3 text-center">
                Perkenalkan nama saya Gunari Farhan saya merupakan mahasiswa aktif yang sedang menempuh pendidikan S1 semester 4 dari jurusan sistem Informasi Unigal Ciamis, saya telah menghabiskan hampir 2 tahun pendidikan tinggi, saya
                dapat mempelajari tentang pemprograman dan Database Management System (DBSM), alasan kenapa saya kuliah di jurusan ini adalah untuk memulai diri menjadi seorang programmer yang bisa bermanfaat bagi masyarakat.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About -->

  <!-- Projects -->
  <section id="projects" style="background-color: #ff1616">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h1 class="fw-bold mb-3">My Projects</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 mb-3">
          <div class="card">
            <img src="img/Screenshot 2024-07-08 130457.png" class="card-img-top" alt="projects1" />
            <div class="card-body">
              <p class="card-text">Personal Profil Web.</p>
            </div>
          </div>
        </div>
        < </div>
      </div>
    </div>
    </div>
    </div>
  </section>
  <!-- End Projects -->
  <!-- Contact -->
  <section id="contact">
    <div class="container pb-5">
      <div class="row text-center text-dark">
        <div class="col">
          <h1 class="fw-bold mb-3">Contact Me</h1>
        </div>
      </div>
      <div class="row justify-content-center mb-3 text-dark">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" />
            </div>
            <div class="mb-3">
              <label for="text" class="form-label">Message</label>
              <textarea class="form-control" id="text" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-danger fw-bold text-white">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact -->

  <!-- User Skills -->

  <section id="skills">
    <div class="container">
      <div id="message"></div>

      <h1 class="mt-4 mb-4 text-center text-danger">SKILLS USER CRUD</h1>
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col col-sm-9">SKILLS</div>
            <div class="col col-sm-3">
              <button type="button" id="add_data" class="btn btn-success btn-sm float-end">Add</button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="sample_data">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Skill Name</th>
                  <th>Rating</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal" tabindex="-1" id="action_modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post" id="sample_form">
              <div class="modal-header">
                <h5 class="modal-title" id="dynamic_modal_title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label">User ID</label>
                  <input type="text" name="user_id" id="user_id" class="form-control" />
                  <span id="user_id_error" class="text-danger"></span>
                </div>
                <div class="mb-3">
                  <label class="form-label">Skill Name</label>
                  <input type="skill_name" name="skill_name" id="skill_name" class="form-control" />
                  <span id="skill_name_error" class="text-danger"></span>
                </div>
                <div class="mb-3">
                  <label class="form-label">Rating</label>
                  <input type="rating" name="rating" id="rating" class="form-control" />
                  <span id="rating_error" class="text-danger"></span>
                </div>
                <div class="mb-3">
                  <label class="form-label">Description</label>
                  <input type="text" name="description" id="description" class="form-control" />
                  <span id="description_error" class="text-danger"></span>
                </div>
              </div>
              <div class="modal-footer">
                <input type="hidden" name="id" id="id" />
                <input type="hidden" name="action" id="action" value="Add" />
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="action_button">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="" style="margin-bottom: -20px">
    <div class="footer-bottom" style="background-color: #ffffff">
      <p class="link p-3 text-center">© Copyright 2024 <a class="text-danger text-decoration-none" href="">Gunari Farhan</a></p>
    </div>
  </footer>
  <!-- End Footer -->

  <script>
    $(document).ready(function() {
      showAll();

      function showAll() {
        $.ajax({
          type: "GET",
          contentType: "application/json",
          url: "https://gunari18.amisbudi.cloud/web-porto-gunari/si-admin/api/users/read.php?id=",
          success: function(response) {
            $("#full_name").text(response.full_name); //mengubah elemen html dengan .text(nilai) atau .html(nilai)
            $("#job_position").text(response.job + " | " + response.expected_position);
          },
          error: function(err) {},
        });
      }
    });
  </script>

  <script>
    $(document).ready(function() {
      showAll();

      $("#add_data").click(function() {
        $("#dynamic_modal_title").text("Add User Skills");
        $("#sample_form")[0].reset();
        $("#action").val("Add");
        $("#action_button").text("Add");
        $(".text-danger").text("");
        $("#action_modal").modal("show");
      });

      $("#sample_form").on("submit", function(event) {
        event.preventDefault();
        if ($("#action").val() == "Add") {
          var formData = {
            user_id: $("#user_id").val(),
            skill_name: $("#skill_name").val(),
            rating: $("#rating").val(),
            description: $("#description").val(),
          };

          $.ajax({
            url: "https://gunari18.amisbudi.cloud/web-porto-gunari/si-admin/api/skills/create.php",
            method: "POST",
            data: JSON.stringify(formData),
            success: function(data) {
              $("#action_button").attr("disabled", false);
              $("#message").html('<div class="alert alert-success">' + data.message + "</div>");
              $("#action_modal").modal("hide");
              $("#sample_data").DataTable().destroy();
              showAll();
            },
            error: function(err) {
              console.log(err);
            },
          });
        } else if ($("#action").val() == "Update") {
          var formData = {
            id: $("#id").val(),
            user_id: $("#user_id").val(),
            skill_name: $("#skill_name").val(),
            rating: $("#rating").val(),
            description: $("#description").val(),
          };

          $.ajax({
            url: "https://gunari18.amisbudi.cloud/web-porto-gunari/si-admin/api/skills/update.php",
            method: "PUT",
            data: JSON.stringify(formData),
            success: function(data) {
              $("#action_button").attr("disabled", false);
              $("#message").html('<div class="alert alert-success">' + data.message + "</div>");
              $("#action_modal").modal("hide");
              $("#sample_data").DataTable().destroy();
              showAll();
            },
            error: function(err) {
              console.log(err);
            },
          });
        }
      });
    });

    function showAll() {
      $.ajax({
        type: "GET",
        contentType: "application/json",
        url: "https://gunari18.amisbudi.cloud/web-porto-gunari/si-admin/api/skills/read.php",
        success: function(response) {
          // console.log(response);
          var json = response.body;
          var dataSet = [];
          for (var i = 0; i < json.length; i++) {
            var sub_array = {
              user_id: json[i].user_id,
              skill_name: json[i].skill_name,
              rating: json[i].rating,
              description: json[i].description,
              action: '<button onclick="showOne(' + json[i].id + ')" class="btn btn-sm btn-warning">Edit</button>' + '<button onclick="deleteOne(' + json[i].id + ')" class="btn btn-sm btn-danger">Delete</button>',
            };
            dataSet.push(sub_array);
          }
          $("#sample_data").DataTable({
            data: dataSet,
            columns: [{
                data: "user_id",
              },
              {
                data: "skill_name",
              },
              {
                data: "rating",
              },
              {
                data: "description",
              },
              {
                data: "action",
              },
            ],
          });
        },
        error: function(err) {
          console.log(err);
        },
      });
    }

    function showOne(id) {
      $("#dynamic_modal_title").text("Edit User Skills");
      $("#sample_form")[0].reset();
      $("#action").val("Update");
      $("#action_button").text("Update");
      $(".text-danger").text("");
      $("#action_modal").modal("show");

      $.ajax({
        type: "GET",
        contentType: "application/json",
        url: "https://gunari18.amisbudi.cloud/web-porto-gunari/si-admin/api/skills/read.php?id=" + id,
        success: function(response) {
          $("#id").val(response.id);
          $("#user_id").val(response.user_id);
          $("#skill_name").val(response.skill_name);
          $("#rating").val(response.rating);
          $("#description").val(response.description);
        },
        error: function(err) {
          console.log(err);
        },
      });
    }

    function deleteOne(id) {
      alert("Yakin untuk hapus data ?");
      $.ajax({
        url: "https://gunari18.amisbudi.cloud/web-porto-gunari/si-admin/api/skills/delete.php",
        method: "DELETE",
        data: JSON.stringify({
          id: id,
        }),
        success: function(data) {
          $("#action_button").attr("disabled", false);
          $("#message").html('<div class="alert alert-success">' + data + "</div>");
          $("#action_modal").modal("hide");
          $("#sample_data").DataTable().destroy();
          showAll();
        },
        error: function(err) {
          console.log(err);
        },
      });
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>