// get back from the server
export interface ISocketMessage {
    numUsers?: number;
    username?: string;
    message?: string;
    isLog?: boolean;
    color?: string;
    fade?: boolean;
}