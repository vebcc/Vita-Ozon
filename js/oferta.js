function showmemore(sectionname, nomore=0){
    if(nomore==0){
        $('#'+sectionname+'short').addClass('hidden');
        $('#'+sectionname+'more').removeClass('hidden');
    }else{
        $('#'+sectionname+'short').removeClass('hidden');
        $('#'+sectionname+'more').addClass('hidden');
    }
}
