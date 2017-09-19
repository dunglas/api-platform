FROM node:8.5-alpine

RUN yarn global add @api-platform/client-generator

# Prevent the reinstallation of node modules at every changes in the source code
RUN mkdir -p /usr/src/admin /tmp/deps
COPY package.json /tmp/deps/package.json
COPY yarn.lock /tmp/deps/yarn.lock
RUN cd /tmp/deps && yarn install
RUN mv /tmp/deps/node_modules /usr/src/admin && rm -Rf /tmp/deps

WORKDIR /usr/src/client
COPY . ./

CMD yarn start
