import * as socket from 'socket.io';

export interface UserSocket extends socket.Socket{
    username: string;
}