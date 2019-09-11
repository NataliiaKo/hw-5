<?php @include_once ('structure.php');?>

<?php function showMap ($longitude,$latitude,$name){?>
<!-- Button trigger modal-->
<button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
    <?= $name;?>
</button>
<style>
        #map {
            width: 100%;
            height: 400px;
        }
</style>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Google Map</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

<!-- 1. Создаем элемент внутри которого у нас будет отображаться карта Google Maps -->
<div id="map"></div>

<!-- 4. Пишем скрипт который создаст и отобразит карту Google Maps на странице. -->
<script type="text/javascript">

    // Определяем переменную map
    var map;

    // Функция initMap которая отрисует карту на странице
    function initMap() {

        // В переменной map создаем объект карты GoogleMaps и вешаем эту переменную на <div id="map"></div>
        map = new google.maps.Map(document.getElementById('map'), {
            // При создании объекта карты необходимо указать его свойства
            // center - определяем точку на которой карта будет центрироваться
            center: {lat: <?= $latitude; ?>, lng: <?= $longitude; ?>},
            // zoom - определяет масштаб. 0 - видно всю платнеу. 18 - видно дома и улицы города.
            zoom: 12
        });
    }
</script>

<!-- 3. Подключаем библиотеку Google Maps Api, чтобы создать карту -->
<!-- Атрибуты async и defer - позволяют загружать этот скрипт асинхронно, вместе с загрузкой всей страницы  -->
<!-- В подключении библиотеки Google Maps Api в конце указан параметр callback, после  подключения и загрузки этого Api сработает функция initMap для отрисовки карты,  которую мы описали выше -->
<script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php }?>
<!-- Optional JavaScript-->
<!-- jQuery first, then Popper.js, then Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
