<script>
var radioIds = new Array();

$('.rating input[name="Voto"]').each(function(){
    radioIds.push($(this).attr('id'));
});

console.log(radioIds)
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="col-sm-4">
  <fieldset class="rating">
    <input type="radio" id="star54" name="Voto" value="5" /><label class="full" for="star54" title="Ottimo - 5 stelle"></label>
    <input type="radio" id="star44'" name="Voto" value="4" /><label class="full" for="star44" title="Buono - 4 stelle"></label>
    <input type="radio" id="star34" name="Voto" value="3" /><label class="full" for="star34" title="Discreto - 3 stelle"></label>
    <input type="radio" id="star24'" name="Voto" value="2" /><label class="full" for="star24" title="Insufficiente - 2 stelle"></label>
    <input type="radio" id="star14" name="Voto" value="1" /><label class="full" for="star14" title="Pessimo - 1 stella"></label>
  </fieldset>
</div>
