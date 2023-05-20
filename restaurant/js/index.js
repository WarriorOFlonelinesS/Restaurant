const iconMenu = document.querySelector('.menu-icon'),
    links = document.querySelectorAll('.menu-link[href^="#"]'),
    menuBody = document.querySelector('.menu-body'),
    openPopUp = document.getElementById('open'),
    openPopUpLink = document.getElementById('open_link'),
    closePopUp = document.getElementById('close'),
    popUpText = document.getElementById('popup__text'),
    popUp = document.getElementById('popup'),
    dots = document.querySelectorAll('.dot'),
    comments = document.querySelectorAll('.comment-item'),
    commentDots = document.querySelectorAll('.comment-dot'),
    popUpOrder = document.getElementById('order'),
    popUpList = document.getElementById('list'),
    orderAlert = document.querySelector('.alert'), 
    closeItem = document.querySelector('.item__close'),
    popUpButton = document.getElementById('popup__button'),
    popUpOrdering = document.getElementById('ordering'),
    openPopUpOrdering = document.getElementById('popup__button'),
    closePopUpOrdering = document.getElementById('_close'),
    outPrice = document.getElementById('out'),
    submitAlert =document.querySelector('.alert_submit'), 
    submitBtn = document.getElementById('submit'),
    form = document.querySelector('.popup__form')
let dotIndex = 0,
    width = 300, 
    count = 3,
    list = carousel.querySelector('ul'),
    listElems = carousel.querySelectorAll('li');

const activeComment = (index) =>{
      for(let elem of comments){
        elem.classList.remove('activation');
      };
      comments[index].classList.add('activation');
    };
    
    const activeCommentDot = (index) => {
      for (let dot of commentDots){
        dot.classList.remove('_activety');
      };
      commentDots[index].classList.add('_activety');
    };
      
    commentDots.forEach((dot, index) => {
      dot.addEventListener('click', ()=>{
        activeComment(index);
        activeCommentDot(index);
      });
    });

const activeCard = (index) =>{
  for(let elem of listElems){
    elem.classList.remove('active');
  };
  listElems[index].classList.add('active');
};

const activeDot = (index) => {
  for (let dot of dots){
    dot.classList.remove('activety');
  };
  dots[index].classList.add('activety');
};
  
dots.forEach((dot, index) => {
  dot.addEventListener('click', ()=>{
    dotIndex = index;
    activeCard(dotIndex);
    activeDot(dotIndex);
  });
});

let i = 1;
  for(let li of carousel.querySelectorAll('li')) {
  li.style.position = 'relative';
  li.insertAdjacentHTML('beforeend', `<span style="position:absolute;left:0;top:0">${i}</span>`);
  i++;
}

let position = 0; 

carousel.querySelector('.prev').onclick = function() {
  
  position += width * count;
  
  position = Math.min(position, 0);
  list.style.marginLeft = position + 'px';
};

carousel.querySelector('.next').onclick = function() {
  
  position -= width * count;

  position = Math.max(position, -width * (listElems.length - count));
  list.style.marginLeft = position + 'px';
};

    var left = document.querySelector('.left-button');
    var right = document.querySelector('.right-button');
    var viewport = document.querySelector('.viewport-menu');


if(iconMenu){
    iconMenu.addEventListener('click', ()=>{
            document.body.classList.toggle('_lock');
            iconMenu.classList.toggle('_active');
            menuBody.classList.toggle('_active');
   
    })
        for(let link of links){
        link.addEventListener('click', () => {
            document.body.classList.remove('_lock');
            iconMenu.classList.remove('_active');
            menuBody.classList.remove('_active');
    })
    };
};

openPopUpOrdering.addEventListener('click', (e) =>{
  e.preventDefault()
  popUpOrdering.classList.add('_open');
  popUp.classList.remove('open');
  addToInputs()
})

closePopUpOrdering.addEventListener('click', (e) => {
  e.preventDefault();
  popUpOrdering.classList.remove('_open');
  popUp.classList.remove('open');
})

openPopUp.addEventListener('click', () =>{
  popUp.classList.add('open');
})
openPopUpLink.addEventListener('click', (e) => {
    e.preventDefault();
    popUp.classList.add('open');
});

closePopUp.addEventListener('click', (e) => {
    e.preventDefault();
    popUp.classList.remove('open');
})

let out = 0;

let cart = {
  'fid45s' : {
    'articul':  'fid45s' ,
    'name' : 'Вареники різнокольорові',
    'price' : 30,
    'count' : 0,
    'src' : "./image/art-1a.png",
  },
  'atpjf8' : {
    'articul':  'atpjf8',
    'name' : 'Вареники-грибочки',
    'price' : 320,
    'count' : 0,
    'src' : './image/art-1b.png',
  },
  'rup99o' : {
    'articul':  'rup99o',
    'name' : 'Вареники з вишнею',
    'price' : 250,
    'count' : 0,
    'src' : './image/art-1c.png',
  },
  'arto89' : {
    'articul':"arto89",    
    'name' : 'Вареники з рибою',
    'price' : 250,
    'count' : 0,
    'src' : './image/1f.png',
  },
  'o90yht' : {
    'articul':'o90yht',   
    'name' : 'Вареники з ананасом',
    'price' : 420,
    'count' : 0,
    'src' : './image/art-1d.png',
  },
  "uor567" : {
    'articul':"uor567",
    'name' : "Вареники з м'ясом",
    'price' : 420,
    'count' : 0,
    'src' : './image/1f.png',
  },
  'poe456' : {
    'articul':'poe456',
    'name' : 'Вареники з грибами',
    'price' : 420,
    'count' : 0,
    'src' : './image/art-1e.png',
  },
  'cr89io' : {
    'articul': 'cr89io',
    'name' : 'Вареники з рисом',
    'price' : 420,
    'count' : 0,
    'src' : './image/art-1f.png',
  },
};

let newCart =[]

document.onclick = event =>{
  if(event.target.classList.contains('menu-btn'));
{
  plusFunction(event.target.dataset.id);

}};

const plusFunction = id =>{
  cart[id]['count']++;
  renderCart(cart[id]);
  setTimeout();

}

const renderCart = (id) =>{


var newItem = {articul: id['articul'], count: id['count']};
var isDuplicate = false
newCart.forEach(function(item) {
  if (item.articul === newItem.articul) {
    item.count += 1;
    isDuplicate = true;
  }
});

if (!isDuplicate) {
  newCart.push(newItem);
}

  let item = document.createElement('li');
  item.classList.add('list__item');
  const itemImage = document.createElement('img');
  itemImage.src = id["src"];
  itemImage.classList.add('item__img');
  item.append(itemImage);
  const itemTitle = document.createElement('div');
  itemTitle.append(id['name']);
  itemTitle.classList.add('item__title');
  item.append(itemTitle);
  const itemPrice = document.createElement('div')
  itemPrice.append(`${id["price"]} ₴`);
  itemPrice.classList.add('item__price');
  item.append(itemPrice);
  const itemClose = document.createElement('img');
  itemClose.src = './image/item-close.svg';
  itemClose.classList.add('item__close');
  item.append(itemClose);
  out =+ id['count'] * id['price']
  outPrice.innerHTML = `До сплати:${out}₴`
  itemClose.onclick = () =>{
    item.remove();
    id['count']--;
    if(popUpList.childNodes.length == 1){
      popUpText.classList.remove('hidden');
    }

  }
  popUpList.append(item);
    popUpText.classList.add('hidden');
    $('#alert').show(1000,function(){
      setTimeout(function(){
        $('#alert').hide(500)
      }, 3000)
    })
};

const addToInputs = () => {
    for(let i = 0; i < newCart.length; i++){
      form.innerHTML += "<input type='text' class='input' name='order' value=''>"
    }
  let tabs = document.querySelectorAll('.input');
  for(let i = 0; i < newCart.length; i++){
    tabs[i].value = `Articul: ${newCart[i].articul}, Count:${newCart[i].count}`

}
}

submitBtn.onclick = () => {
  submitAlert.style.display = 'block';
}


