<!DOCTYPE html>
<html>

<head>
    <title>Sitemap Update</title>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .sitemapdiv {
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .sitemapdiv h3 {
            font-size: 18px;
            text-transform: capitalize;
            color: #D22B2B;
        }

        .sitemapdiv span {
            font-size: 18px;
            text-transform: capitalize;
            color: #5cb85c;
        }

        .col-md-4.offset-md-4 {
            border: 1px solid #000;
            border-radius: 20px;
            padding: 40px 40px 0px 40px;
        }

        .sitemapdivmsg {
            text-align: center;
            padding-bottom: 30px;
        }

        @media(min-width:300px) and (max-width:760px) {
            .sitemapdiv h2 {
                padding-bottom: 30px;
            }
        }
    </style>
</head>

<body>
    <section class="sitemapdiv">
        <div class="container">
            <div class="col-md-4 offset-md-4">
                <h2>Sitemap File Upload</h2>
                <form action="sitemap_update.php" method="POST" enctype="multipart/form-data">
                    <!-- User input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="username">Name</label>
                        <input type="text" name="username" id="username" class="form-control" />
                    </div>

                    <!-- Pass input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example2">Password</label>
                        <input type="password" name="password" id="password" class="form-control" />
                    </div>

                    <!-- File Select -->
                    <div class="form-outline mb-4">
                        <input type="file" name="newSitemap" id="newSitemap" accept=".xml" class="form-control" />
                        <label class="form-label" for="form4Example2">Choose XML File</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" value="Upload" class="btn btn-primary btn-block mb-4 w-100">Upload</button>
                </form>
                <div class="sitemapdivmsg">
                    <?php include 'authweb/function/function.php' ?>
                </div>
            </div>
        </div>

    </section>
</body>

</html>