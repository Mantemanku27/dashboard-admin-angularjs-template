app.controller('UserCreateCtrl', ['$state', '$scope', 'user', '$mdToast', '$http', function ($state, $scope, user, $mdToast) {
//Bidang Create
    $scope.isLoading = true;
    $scope.isLoaded = false;

    $scope.setLoader = function (status) {
        if (status == true) {
            $scope.isLoading = true;
            $scope.isLoaded = false;
        } else {
            $scope.isLoading = false;
            $scope.isLoaded = true;
        }
    };
    $scope.detailbatas = '';
    user.getbatas()
        .success(function (data) {
            $scope.detailbatas = data;
            if($scope.detailbatas == 2){
                $scope.showToast('red', 'Maaf batas inputan level Administrator telah habis !');
            }

        });

    //Init input form variable
    $scope.input = {};
    $scope.loadKoderekening = true;
    $scope.objUptd = [];
    $scope.objSkpd = [];
    $scope.loadUptd = true;
    $scope.loadUptd = false;
    $scope.objUser = [];
    //Set process status to false
    $scope.process = false;

    //Init Alert status
    $scope.alertset = {
        show: 'hide',
        class: 'green',
        msg: ''
    };

    //Function to clear input
    $scope.clearInput = function () {
        $scope.input.nip = '';
        $scope.input.name = '';
        $scope.input.email = '';
        $scope.input.password = '';
        $scope.input.password_confirmation = '';
        $scope.input.level = '';
        $scope.input.no_telp = '';
        $scope.detailbatas = '';
        user.getbatas()
            .success(function (data) {
                $scope.detailbatas = data;
            if($scope.detailbatas == 2){
                $scope.showToast('red', 'Maaf batas inputan level Administrator telah habis !');
            }
            });


    };


    //Submit Data
    $scope.submitData = function (isBack) {
        //Set process status
        $scope.process = true;
        //Close Alert
        $scope.alertset.show = 'hide';
        //Check validation status
        if ($scope.addForm.$valid) {
            //run Ajax
            user.store($scope.input)
                .success(function (data) {
                    if (data.success == true) {
                        //If back to list after submitting
                        if (isBack == true) {
                            //$scope.alertset.class = 'green';
                            //Redirect to akun
                            $state.go('app.user');
                            $scope.showToast('green', 'Simpan Data Berhasil !');
                        } else {
                            $scope.sup();
                            $scope.process = false;
                            $scope.alertset.msg = 'Simpan Data Berhasil !';
                            $scope.alertset.show = 'show';
                            $scope.alertset.class = 'green';
                            $scope.showToast('green', 'Simpan Data Berhasil !');
                        }
                        //Clear Input
                        $scope.clearInput();
                    } else {
                        //$scope.alertset.class = 'orange';
                        $scope.showToast('red', 'Simpan Data Gagal !');
                    }
                    //Set Alert message
                    $scope.alertset.show = 'show';
                    $scope.alertset.msg = data.result;

                })
                .error(function (data, status) {
                    switch (status) {
                        case 401 :
                            $scope.redirect();
                            break;
                        case 500 :
                            $scope.sup();
                            $scope.process = false;
                            $scope.alertset.msg = "Internal Server Errors";
                            $scope.alertset.show = 'show';
                            $scope.showToast('red', 'Simpan Data Gagal !');
                            $scope.alertset.class = 'red';
                            break;
                        case 422 :
                            $scope.sup();
                            $scope.process = false;
                            $scope.alertset.msg = data.validation;
                            $scope.alertset.show = 'show';
                            $scope.showToast('red', 'Simpan Data Gagal !');
                            $scope.alertset.class = 'red';
                            break;
                    }
                });
        }
    };

    //Alert
    $scope.showToast = function (warna, msg) {
        $mdToast.show({
            //controller: 'AkunToastCtrl',
            template: "<md-toast class='" + warna + "-500'><span flex> " + msg + "</span> <md-button ng-click='closeToast()'>x</md-button></md-toast> ",
            //templateUrl: 'views/ui/material/toast.tmpl.html',
            hideDelay: 6000,
            parent: '#toast',
            position: 'top right'
        });
    };

}]);
