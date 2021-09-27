<!DOCTYPE html>
<html lang="en">

<head>
    <title>Real Fizz Buzz</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <style>
    .required {
        color: red;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <h1 class="text-center">Real Fizz Buzz</h1>
                <h2 class="text-center">AdAction Assessment</h2>
                <div class="card mb-5">
                    <!-- Tab Headers -->
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="step1-tab" data-bs-toggle="tab" data-bs-target="#step1" type="button" role="tab" aria-controls="step1" aria-selected="true">Step 1</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="step2-tab" data-bs-toggle="tab" data-bs-target="#step2" type="button" role="tab" aria-controls="step2" aria-selected="false">Step 2</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="step3-tab" data-bs-toggle="tab" data-bs-target="#step3" type="button" role="tab" aria-controls="step2" aria-selected="false">Step 3</button>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab Content -->
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <!-- Step 1 -->
                            <div class="tab-pane fade show active" id="step1" role="tabpanel" aria-labelledby="step1-tab">
                                <h3>Step 1</h3>
                                <p>Write some code that prints out the following for a contiguous range of numbers:</p>
                                <ol>
                                    <li>the number</li>
                                    <li>'fizz' for numbers that are multiples of 3</li>
                                    <li>'buzz' for numbers that are multiples of 5</li>
                                    <li>'fizzbuzz' for numbers that are multiples of 15</li>
                                </ol>
                                <div class="card mb-3">
                                    <h5 class="card-header">Input</h5>
                                    <div class="card-body">
                                        <!-- Input -->
                                        <form method="post" name="step1">
                                            <fieldset>
                                                <legend>Enter the maximum number in the range and click Submit.</legend>
                                                <div class="row by-3 mb-3">
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="max1" class="form-label">Maximum number <span class="required">*</span></label>
                                                        <input autocomplete="off" name="max1" required type="number" class="form-control" id="max1">
                                                        <div class="form-text">Enter a number greater than 1</div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="mb-3">
                                                <button name="submit1" type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Step 2 -->
                            <div class="tab-pane fade" id="step2" role="tabpanel" aria-labelledby="step2-tab">
                                <h3>Step 2</h3>
                                <p>Enhance your existing FizzBuzz solution to perform the following:</p>
                                <ol>
                                    <li>If the number contains a three you must output the text 'lucky'. This overrides any existing behaviour</li>
                                </ol>
                                <div class="card mb-5">
                                    <h5 class="card-header">Input</h5>
                                    <div class="card-body">
                                        <!-- Input -->
                                        <form method="post" name="step2">
                                            <fieldset>
                                                <legend>Enter the maximum number in the range and click Submit.</legend>
                                                <div class="row by-3 mb-3">
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="max2" class="form-label">Maximum number <span class="required">*</span></label>
                                                        <input autocomplete="off" name="max2" required type="number" class="form-control" id="max2">
                                                        <div class="form-text">Enter a number greater than 1</div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="mb-3">
                                                <button name="submit2" type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Step 3 -->
                            <div class="tab-pane fade" id="step3" role="tabpanel" aria-labelledby="step3-tab">
                                <h3>Step 3</h3>
                                <p>Enhance your existing solution to perform the following:</p>
                                <ol>
                                    <li>Produce a report at the end of the program showing how many times the following were output:
                                        <ol style="list-style-type: lower-alpha;">
                                            <li>Fizz</li>
                                            <li>Buzz</li>
                                            <li>Fizzbuzz</li>
                                            <li>Lucky</li>
                                            <li>an integer</li>
                                        </ol>
                                    </li>
                                </ol>
                                <div class="card mb-5">
                                    <h5 class="card-header">Input</h5>
                                    <div class="card-body">
                                        <!-- Input -->
                                        <form method="post" name="step3">
                                            <fieldset>
                                                <legend>Enter the maximum number in the range and click Submit.</legend>
                                                <div class="row by-3 mb-3">
                                                    <div class="col-12 col-sm-6 col-md-4">
                                                        <label for="max3" class="form-label">Maximum number <span class="required">*</span></label>
                                                        <input autocomplete="off" name="max3" required type="number" class="form-control" id="max3">
                                                        <div class="form-text">Enter a number greater than 1</div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="mb-3">
                                                <button name="submit3" type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <h5 class="card-header">Output</h5>
                            <div class="card-body">
                                <!-- Output -->
                                <?php require_once "./FizzBuzz.php";?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>