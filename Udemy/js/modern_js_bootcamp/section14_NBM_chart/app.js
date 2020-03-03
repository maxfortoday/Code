const warriorsGames = [{
  awayTeam: {
    team: 'Golden State',
    points: 119,
    isWinner: true
  },
  homeTeam: {
    team: 'Houston',
    points: 106,
    isWinner: false
  }
},
{
  awayTeam: {
    team: 'Golden State',
    points: 105,
    isWinner: false
  },
  homeTeam: {
    team: 'Houston',
    points: 127,
    isWinner: true
  }
},
{
  homeTeam: {
    team: 'Golden State',
    points: 126,
    isWinner: true
  },
  awayTeam: {
    team: 'Houston',
    points: 85,
    isWinner: false
  }
},
{
  homeTeam: {
    team: 'Golden State',
    points: 92,
    isWinner: false
  },
  awayTeam: {
    team: 'Houston',
    points: 95,
    isWinner: true
  }
},
{
  awayTeam: {
    team: 'Golden State',
    points: 94,
    isWinner: false
  },
  homeTeam: {
    team: 'Houston',
    points: 98,
    isWinner: true
  }
},
{
  homeTeam: {
    team: 'Golden State',
    points: 115,
    isWinner: true
  },
  awayTeam: {
    team: 'Houston',
    points: 86,
    isWinner: false
  }
},
{
  awayTeam: {
    team: 'Golden State',
    points: 101,
    isWinner: true
  },
  homeTeam: {
    team: 'Houston',
    points: 92,
    isWinner: false
  }
}
]

// const ul = document.createElement('ul');
// warriorsGames.forEach(game => {
//   const {awayTeam,homeTeam} = game;
//   const {team:aTeam,points:aPoints} = awayTeam;
//   const {team:hTeam,points:hPoints} = homeTeam;
//   const li = document.createElement('li');
//   const teamsToPlay = `${aTeam} VS ${hTeam}`
//   const teamsScore = aPoints > hPoints ? `<strong>${aPoints}</strong> - ${hPoints}` : `${aPoints} - <strong>${hPoints}</strong>`
//   const warrior = hTeam === 'Golden State' ? homeTeam : awayTeam;
//   li.classList.add(warrior.isWinner ? "winner" : "loser");
//   li.innerHTML = `${teamsToPlay} ${teamsScore}`
//   ul.appendChild(li);
// })
// document.body.prepend(ul);


const makeChart = (games,targetTeam) => {
  const ul = document.createElement('ul');
  games.forEach(game => {
    const li = document.createElement('li');
    li.innerHTML = chartLine(game)
    li.classList.add(isWinner(game,targetTeam) ? "winner" : "loser");
    ul.appendChild(li);
  })
  return ul
}

const isWinner = ({awayTeam,homeTeam},targetTeam) => {
  const target = homeTeam.team === targetTeam ? homeTeam : awayTeam;
  return target.isWinner
}

const chartLine = ({awayTeam,homeTeam}) => {
  const {team:aTeam,points:aPoints} = awayTeam;
  const {team:hTeam,points:hPoints} = homeTeam;
  const teamsToPlay = `${aTeam} VS ${hTeam}`
  const teamsScore = aPoints > hPoints ? `<strong>${aPoints}</strong> - ${hPoints}` : `${aPoints} - <strong>${hPoints}</strong>`;
  return `${teamsToPlay} ${teamsScore}`
}

const golgenState = document.querySelector('#golgenState')
const houston = document.querySelector('#houston')

const chart1 = makeChart(warriorsGames, 'Houston')
const chart2 = makeChart(warriorsGames, 'Golden State')

golgenState.appendChild(chart2)
houston.appendChild(chart1)