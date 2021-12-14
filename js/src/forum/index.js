
import app from 'flarum/forum/app';
import { extend } from 'flarum/common/extend';
import CommentPost from 'flarum/forum/components/CommentPost';
import Slider from './Slider';

app.initializers.add('zerosonesfun/collection', () => {
    extend(CommentPost.prototype, ['oncreate', 'onupdate'], Slider);
});
