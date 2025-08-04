const { spawn } = require('child_process');


const [,, ...args] = process.argv;

const [organizationId = null, apiKey = null] = args;

if(!organizationId) {
  console.error('Organization ID is missing.')
}
if(!apiKey) {
  console.error('API key is missing.')
}


if(!organizationId || !apiKey) {
  console.log(`node run-respect.js [organizationId] [apiKey]`);
  process.exit(1);
}

const command = `redocly respect --input organizationId=${organizationId} --input apiKey=${apiKey} tests/*.arazzo.yaml`;

const child =  spawn(command,[], {
  shell: true,

  cwd: process.cwd(),
  env: process.env,
  stdio: ['inherit', 'pipe', 'pipe'],
  encoding: 'utf-8',
});

child.stdout.pipe(process.stdout);
child.stderr.pipe(process.stderr);
child.on('close', function(code) {
  process.exit(code)
});
