/***********************************************
 * MultiFrame Image Slideshow script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
 * This notice MUST stay intact for legal use
 * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
 ***********************************************/

//Set pause between each image display (2000=2 second):
var slidedelay=2000

//Set how many images to show at once (must be less than total # of images above):
var slidestoreveal=3

//Specify code to insert between each slide (ie: "<br>" to insert a line break and create a vertical layout)
//"" for none (or horizontal):
var slideseparater=""

//Set optional link target to be added to all images with a link:
var optlinktarget="secwindow"

//Set image border width:
var imgborderwidth=0

//Set opacity value of each image when it's "dimmed", and when it's not, respectively (1=100% opaque/normal).
//Change 0.2 to 0 to completely hide image when it's dimmed:
var opacityvalues=[0.2,1]

///No need to edit beyond here///////////

function processimgcode(theimg){
	var imghtml=""
	if (theimg[1]!="")
		imghtml='<a href="'+theimg[1]+'" target="'+optlinktarget+'">'
		imghtml+='<img src="'+theimg[0]+'" border="'+imgborderwidth+'" style="filter:alpha(opacity='+(opacityvalues[0]*100)+');-moz-opacity:'+opacityvalues[0]+'">'
		if (theimg[1]!="")
			imghtml+='</a>'
			return imghtml
			}

var curslide=1 //var to track current slide (total: slidestoreveal)
var curimgindex=0 //var to track current image (total: seqslides.length)
var isfirstcycle=1 //boolean to indicate whether this is the first cycle

if (document.getElementById){
	for (i=0;i<slidestoreveal;i++)
		document.write('<span id="seqslide'+i+'" class="seqslidestyle">'+processimgcode(seqslides[i])+'</span>'+slideseparater)
		curimgindex=slidestoreveal
		illuminateslide(0,opacityvalues[1])
		}

function illuminateslide(slideindex, amt){
	var slideobj=document.getElementById("seqslide"+slideindex).getElementsByTagName("IMG")[0]
	if (slideobj.filters)
		slideobj.filters.alpha.opacity=amt*100
		else if (slideobj.style.MozOpacity)
			slideobj.style.MozOpacity=amt
			}

function displayit(){
	if (curslide<slidestoreveal){
		if (!isfirstcycle)
			changeimage(curslide)
			illuminateslide(curslide, opacityvalues[1])
			curslide++
			}
	else{
		isfirstcycle=0
		for (i=0;i<slidestoreveal;i++)
			illuminateslide(i, opacityvalues[0])
			changeimage(0)
			illuminateslide(0, opacityvalues[1])
			curslide=1
			}
}

function changeimage(slideindex){
	document.getElementById("seqslide"+slideindex).innerHTML=processimgcode(seqslides[curimgindex])
	curimgindex++
	if (curimgindex>=seqslides.length)
		curimgindex=0
}

function printShow( pictures )
{
	var seqslides = pictures

	setInterval("displayit()",slidedelay)
}

