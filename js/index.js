/* -------------------------------------------------------------------------- */
/*                                      -                                     */
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/*                              CAPTURE SIDEBARS                              */
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/*                                      -                                     */
/* -------------------------------------------------------------------------- */
const duck = document.getElementById('duck-icon')
const skills_sidebar = document.getElementById('skillsSidebar')
const close_skills_sidebar = document.getElementById('close-skills-sidebar')

const message = document.getElementById('message-icon')
const chat_history_sidebar = document.getElementById('chat-history-sidebar')
const close_chat_history_sidebar = document.getElementById('close-chat-history-sidebar')

const loudness = document.getElementById('loudness-icon')
const loudness_sidebar = document.getElementById('loudness-sidebar')
const loudness_sidebar_bar = document.getElementsByClassName('loudness-sidebar-bar')
const close_loudness_sidebar = document.getElementById('close-loudness-sidebar')

const actions = document.getElementById('actions-icon')
const actions_sidebar = document.getElementById('actions-sidebar')
const close_actions_sidebar = document.getElementById('close-actions-sidebar')
const sign_actions = document.getElementById('sign-actions')
const sign_action_sidebar_action = document.getElementById('sign-action-sidebar-action')
const action_sidebar_action = document.getElementsByClassName('action-sidebar-action')

const avatar = document.getElementById('avatar-icon')
const avatar_sidebar = document.getElementById('avatar-sidebar')
const avatar_parent = document.getElementById('avatar-parent')
const close_avatar_sidebar = document.getElementById('close-avatar-sidebar')

const room = document.getElementById('people-icon')
const room_sidebar = document.getElementById('room-sidebar')
const close_room_sidebar = document.getElementById('close-room-sidebar')

/* -------------------------------------------------------------------------- */
/*                                      -                                     */
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/*                         OPEN AND CLOSE THE SIDEBARS                        */
/* -------------------------------------------------------------------------- */
/* -------------------------------------------------------------------------- */
/*                                      -                                     */
/* -------------------------------------------------------------------------- */

duck.addEventListener('click', function(){
    skills_sidebar.style = 'width: 460px';
})

close_skills_sidebar.addEventListener('click', function(){
    skills_sidebar.style = 'width: 0';
})




message.addEventListener('click', function(){
    chat_history_sidebar.style = 'width: 400px';
})

close_chat_history_sidebar.addEventListener('click', function(){
    chat_history_sidebar.style = 'width: 0';
})




loudness.addEventListener('click', function(){
    loudness_sidebar.style = 'height: 200px';
})

close_loudness_sidebar.addEventListener('click', function(){
    loudness_sidebar.style = 'transition: height 0.4s; height: 0';
})

for (let i = 0; i < loudness_sidebar_bar.length; i++) {
    loudness_sidebar_bar[i].addEventListener('click', ()=>{

    loudness_sidebar.style = 'transition: height 0.4s; height: 0';
        
    })
    
}




actions.addEventListener('click', function(){
    actions_sidebar.style = 'height: 320px';
})

close_actions_sidebar.addEventListener('click', function(){
    actions_sidebar.style = 'height: 0';
    sign_actions.style = 'width: 0';
})




sign_action_sidebar_action.addEventListener('click', function(){
    sign_actions.style = 'width: fit-content';
})

for (let i = 0; i < action_sidebar_action.length; i++) {
    action_sidebar_action[i].addEventListener('click', ()=>{
        sign_actions.style = 'width: 0';
        
    })
    
}




avatar.addEventListener('click', function(){
    avatar_sidebar.style = 'width: 470px';
    avatar_parent.style = 'width: 100vw'
})

close_avatar_sidebar.addEventListener('click', function(){
    avatar_sidebar.style = 'width: 0; padding: 0;';
    avatar_parent.style = 'width: 0'
})

// avatar_parent.addEventListener('click', function(){
//     avatar_sidebar.style = 'width: 0; padding: 0;';
//     avatar_parent.style = 'width: 0'
// })








room.addEventListener('click', function(){
    room_sidebar.style = 'width: 400px';
})

close_room_sidebar.addEventListener('click', function(){
    room_sidebar.style = 'width: 0; padding: 0;';
})