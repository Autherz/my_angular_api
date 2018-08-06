<!DOCTYPE html>
<html np-app="employeeRecords" >
    <head>
        <title>Calculator</title>
        <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
    </head>

    <body>
        <div  ng-controller="calculateController">
            <form class="form-horizontal" novalidate="">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Variable 1</label>
                    <input class="form-control" type="text" id="var1" name="var1" ng-model="var1" ng-require="true">
                </div>
                <pre>{{var1}}</pre>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Variable 2</label>
                    <input class="form-control" type="text" id="var2" name="var2" ng-model="var2" ng-require="true">
                </div>
                <pre>{{var2}}</pre>
                <input type="submit" class="btn btn-primary" ng-click="cal()" value="Calculate" />
            </form>
        </div>
        <script src="<?= asset('app/lib/angular/angular.min.js') ?>" ></script>
        <script src="<?= asset('js/jquery.min.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/calculate.js') ?>"></script>
    </body>
</html>

